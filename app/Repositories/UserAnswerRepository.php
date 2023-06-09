<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Answer;
use App\Models\Result;
use App\Models\UserAnswer;
use App\Repositories\BaseRepository;

/**
 * Class UserAnswerRepository.
 */
class UserAnswerRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return UserAnswer::class;
    }

    public function findById($id) 
    {
        return UserAnswer::find($id);
    }

    public function calculateResultByUserIdAndTestId($request) 
    {
        $score = 0;
        $userId = $request->user_id;
        $testId = $request->test_id;
        $timeTaken = $request->time_taken;
        $isStarted = $request->is_started;
        $endedAt = Carbon::now();
        $startedAt = Carbon::now();
        
        if (!$isStarted) 
        {
            // FIND THE EXAM USER'S ANSWER
            $userAnswer = $this->model->where("user_id", $userId)
                                ->where("test_id", $testId)
                                ->get();

            // THE EXAMP USER'S ANSWER NOT FOUND 
            if (!count($userAnswer)) {
                return false;
            }

            // ARRAY ANSWER ID
            $answerAnswerId = $userAnswer->pluck("answer_id");

            // FIND ANSWER THAT CORRECT BY ARRAY ANSWER ID
            $answer = Answer::whereIn("id", $answerAnswerId)->where("is_correct", true)->get();

            // SET SCORE AS ANSWER FOUND
            if (count($answer)) {
                $score = count($answer);
            }
        }
        
        // FIND THE EXAM USER'S RESULT
        $result = Result::UserId($userId)->TestId($testId)->first();

        // UPDATE THE USER'S RESULT EXIST
        if ($result) {
            $timeStarted = Carbon::parse($result->started_at); 
            $timeUserSpend = $endedAt->diffInMinutes($timeStarted);

            return $result->update([
                "score" => $score,
                "time_taken" => $timeTaken,
                "ended_at" => $endedAt,
                "time_taken" => $timeUserSpend
            ]);
            
        // CTEAE THE USER'S RESULT 
        } else {
            return Result::create([
                "user_id" => $userId,
                "test_id" => $testId,
                "started_at" => $startedAt
            ]); 
        }        
    }

    public function allUserAnswer($request) 
    {
        $query = $this->model->whereUserId($request->user_id)
                            ->whereTestId($request->test_id)
                            ->get();
        return $query;
    }

    public function createUserAnswer($request) 
    {
        // CHECK EXISTING RESULT
        $checkUserResult = Result::whereUserId($request->user_id)
                                ->whereTestId($request->test_id)
                                ->whereNotNull("score")
                                ->first();

        // USER ALREADY HAS RESULT SO, USER CAN'T DO ANYTHING MORE                        
        if ($checkUserResult) {
            return false;
        }
        
        // CHECK EXISTING ANSWER
        $checkUserAnswer = $this->model->whereUserId($request->user_id)
                                    ->whereTestId($request->test_id)
                                    ->whereQuestionId($request->question_id)
                                    ->first();

        // UPDATE ANSWER
        if ($checkUserAnswer) {
            $userAnswer = $this->updateUserAnswer($request, $checkUserAnswer);

        // CREATE NEW ANSWER
        } else {
            $userAnswer = $this->model->create([
                "user_id" => $request->user_id,
                "test_id" => $request->test_id,
                "question_id" => $request->question_id,
                "answer_id" => $request->answer_id
            ]);
        }
        
        return $userAnswer;
    }

    public function updateUserAnswer($request, $userAnswer)
    {
        $userAnswer->update([
            "answer_id" => $request->answer_id
        ]);
        
        return $userAnswer;
    }

    public function deleteUserAnswer($id)
    {
        return UserAnswer::whereId($id)->delete();
    }
}
