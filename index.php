<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">

    <title>charbool</title>
  </head>
  <body>
    <div class="container">
      <canvas id="line-chart" data-database="<?php echo $database; ?>">
      </canvas>
    </div>
    <script src="main.js" charset="utf-8"></script>
    <script>
       // var months = ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'];
       //
       // var data = [1000,1322,1123,2301,3288,988,502,2300,5332,2300,1233,2322];
       //
       // <?php //include 'data.php'; ?>
       //
       // var databaseFromPhp = "<?php //echo json_encode($database); ?>";
       // var database = JSON.parse(databaseFromPhp);
     <?php
       // $(document).ready(function(){
       //   var ctx = $('.line-chart');
       //   var myChart = new Chart(ctx, {
       //       type: 'line',
       //       data: {
       //           labels: months,
       //           datasets: [{
       //               label: 'Andamento vendite',
       //               data: database,
       //               backgroundColor: [
       //                'rgba(255, 99, 132, 0.2)',
       //            ],
       //            borderColor: [
       //                'rgba(54, 162, 235, 1)',
       //            ],
       //           }]
       //       },
       //
       //   });
       // }); ?>
  </body>
</html>
