<?php
    foreach($data as $data){
        $tgl[] = $data->tanggal;
        $jum[] = (float) $data->jumlah;
    }
?>

 <section id="content">
    <div class="container">
        <div id="card-stats">
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content  green white-text">
                            <p class="card-stats-title"></i> Pengunjung Hari Ini</p>
                            <h4 class="card-stats-number"><?php echo $pengunjung->jumHariIni;?></h4>
                        </div>
                        <div class="card-content  green darken-2">
                            <a href="<?php echo base_url(); ?>admin/hariIni" class="white-text"> >>> Cek Data Pengunjung </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content purple white-text">
                            <p class="card-stats-title"></i>Pengunjung Bulan Ini</p>
                            <h4 class="card-stats-number"><?php echo $bulan->jumBulanIni;?></h4>
                        </div>
                        <div class="card-content purple darken-2">
                            <a href="<?php echo base_url(); ?>admin/bulanIni" class="white-text"> >>> Cek Data Pengunjung </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content blue-grey white-text">
                            <p class="card-stats-title">Pengunjung Keseluruhan</p>
                            <h4 class="card-stats-number"><?php echo $tahun->jumSeluruh;?></h4>
                        </div>
                        <div class="card-content  blue-grey darken-2">
                            <a href="<?php echo base_url(); ?>admin/tampilSeluruh" class="white-text"> >>> Cek Data Pengunjung </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        <HR>
            <h4 class="center">STATISTIK PENGUNJUNG</h4>
            <h6 class="center">PER MINGGU</h6>

        <HR>
        <canvas id="canvas" width="1000px" margin="auto" height="280"></canvas>
        <!--Load chart js-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/chartjs/Chart.min.js"></script>
        <script>    
            var lineChartData = {
                labels : <?php echo json_encode($tgl);?>,
                datasets : [    
                {
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(152,235,239,1)",
                    data : <?php echo json_encode($jum);?>
                }
                ]
            }
            var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        </script>
    </div>
</section>