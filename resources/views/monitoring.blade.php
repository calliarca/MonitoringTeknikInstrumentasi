<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Monitoring Tekin Kelompok 8</title>

    <!-- Panggil file jquery untuk proses realtime -->
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>

    <!-- ajax untuk realtime -->
    <script type="text/javascript">
        $(document).ready( function(){
          setInterval( function() {
            $("#kelembaban").load("{{ url('bacakelembaban') }}");
            $("#volume").load("{{ url('bacavolume') }}");
          }, 1000);  //1detik
        });
    </script>

  </head>
  <body style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover;">

  <!-- Tampilan website header -->
  <div class="container" style="text-align: center; margin-top: 150px;">
    <h2 style="margin-top: 50px; font-size: 35px; font-weight: bold;">Monitoring dan Controlling Kelembaban & Volume Air Tangki</h2>
    <h2 style="font-size: 35px; font-weight: normal;">(Tugas Besar Teknik Instrumentasi) Kelompok 2</h2>
  </div>

  <!-- Tampilan Nilai Sensor -->
  <div class="container">
    <div class="row" style="text-align: center; margin-top: 25px;">
     <!-- Card Kelembaban Tanah -->
      <div class="col-md-6">
      <div class="card" style="margin-top:25px;">
          <div class="card-header" style="background-color: red; color: white;">
            <h4 style="font-size: 30px;">Kelembaban Tanah</h4>
          </div>
          <div class="card-body">
            <div style="font-size: 100px; font-weight: bold;">
              <span id="kelembaban">0</span> <span style="font-size: 24px; vertical-align: top">%</span>
          </div>
          </div>
        </div>
        </div>

  <!-- Card  Volume air -->
      <div class="col-md-6">
      <div class="card" style="margin-top:25px;">
          <div class="card-header" style="background-color: red; color: white;">
            <h4 style="font-size: 30px;">Volume Air</h4>
          </div>
          <div class="card-body">
            <div style="font-size: 100px; font-weight: bold;">
              <span id="volume">0</span> <span style="font-size: 24px; vertical-align: top">%</span>
          </div>
          </div>
        </div>
        </div>

    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>