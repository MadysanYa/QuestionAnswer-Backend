<div class="row">
    <div class="col-md-12">
        <div class="box grid-box">
            <div style="padding: 10px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box box-info" style="padding: 10px; border: 2px solid #dd4b39;">
                            <div class="text-center">
                                <h4 class="box-title">Research Properties</h4>
                                <h2 class="box-title text-red" style="margin-top: 0px;">{{ $countProReseach }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box box-info" style="padding: 10px; border: 2px solid #00a65a">
                            <div class="text-center">
                                <h4 class="box-title">Indication Properties</h4>
                                <h2 class="box-title text-red" style="margin-top: 0px;">{{ $countProIndicator }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box box-info" style="padding: 10px; border: 2px solid #1087dd;">
                            <div class="text-center">
                                <h4 class="box-title">Appraisal Properties</h4>
                                <h2 class="box-title text-red" style="margin-top: 0px;">{{ $countProAppraisal }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Count Properties -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="box-title">Property Market Price</h4>
                    </div>
                    @foreach($allDistrictName as $district)
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="chart-bar-khan-{{ $district }}"></canvas>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const khanSenSok = <?php echo json_encode($khanSenSok); ?>;
    const Khan7Makara = <?php echo json_encode($Khan7Makara); ?>;
    const KhanBoeungKengKang = <?php echo json_encode($KhanBoeungKengKang); ?>;
    const KhanChamkarmon = <?php echo json_encode($KhanChamkarmon); ?>;
    const KhanChbarAmpov = <?php echo json_encode($KhanChbarAmpov); ?>;
    const KhanChroyChangvar = <?php echo json_encode($KhanChroyChangvar); ?>;
    const KhanDangkao = <?php echo json_encode($KhanDangkao); ?>;
    const KhanDaunPenh = <?php echo json_encode($KhanDaunPenh); ?>;
    const KhanKamboul = <?php echo json_encode($KhanKamboul); ?>;
    const KhanMeanchey = <?php echo json_encode($KhanMeanchey); ?>;
    const KhanPorSenChey = <?php echo json_encode($KhanPorSenChey); ?>;
    const KhanPrekPnov = <?php echo json_encode($KhanPrekPnov); ?>;
    const KhanRusseyKeo = <?php echo json_encode($KhanRusseyKeo); ?>;
    const KhanToulKork = <?php echo json_encode($KhanToulKork); ?>;

    const chartBarKhanSenSok = document.getElementById('chart-bar-khan-SenSok');
    const chartBarKhan7Makara = document.getElementById('chart-bar-khan-7Makara');
    const chartBarKhanBoeungKengKang = document.getElementById('chart-bar-khan-BoeungKengKang');
    const chartBarKhanChamkarmon = document.getElementById('chart-bar-khan-Chamkarmon');
    const chartBarKhanChbarAmpov = document.getElementById('chart-bar-khan-ChbarAmpov');
    const chartBarKhanChroyChangvar = document.getElementById('chart-bar-khan-ChroyChangvar');
    const chartBarKhanDangkao = document.getElementById('chart-bar-khan-Dangkao');
    const chartBarKhanDaunPenh = document.getElementById('chart-bar-khan-DaunPenh');
    const chartBarKhanKamboul = document.getElementById('chart-bar-khan-Kamboul');
    const chartBarKhanMeanchey = document.getElementById('chart-bar-khan-Meanchey');
    const chartBarKhanPorSenChey = document.getElementById('chart-bar-khan-PorSenChey');
    const chartBarKhanPrekPnov = document.getElementById('chart-bar-khan-PrekPnov');
    const chartBarKhanRusseyKeo = document.getElementById('chart-bar-khan-RusseyKeo');
    const chartBarKhanToulKork = document.getElementById('chart-bar-khan-ToulKork');

    generateNewChart(chartBarKhanSenSok, khanSenSok);
    generateNewChart(chartBarKhan7Makara, Khan7Makara);
    generateNewChart(chartBarKhanBoeungKengKang, KhanBoeungKengKang);
    generateNewChart(chartBarKhanChamkarmon, KhanChamkarmon);
    generateNewChart(chartBarKhanChbarAmpov, KhanChbarAmpov);
    generateNewChart(chartBarKhanChroyChangvar, KhanChroyChangvar);
    generateNewChart(chartBarKhanDangkao, KhanDangkao);
    generateNewChart(chartBarKhanDaunPenh, KhanDaunPenh);
    generateNewChart(chartBarKhanKamboul, KhanKamboul);
    generateNewChart(chartBarKhanMeanchey, KhanMeanchey);
    generateNewChart(chartBarKhanPorSenChey, KhanPorSenChey);
    generateNewChart(chartBarKhanPrekPnov, KhanPrekPnov);
    generateNewChart(chartBarKhanRusseyKeo, KhanRusseyKeo);
    generateNewChart(chartBarKhanToulKork, KhanToulKork);

    function generateNewChart(chartBarID, khan) 
    {
        new Chart(chartBarID, {
            type: 'bar',
            data: {
                labels: khan['communes'],
                datasets: [{
                    label: khan['district'],
                    data: khan['price'],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 159, 64)',
                        'rgb(201, 203, 207)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 205, 86)',
                        'rgb(153, 102, 255)',
                    ]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
</script>
