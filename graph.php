<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CashRich : WebDev - Assaignment</title>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">

    <!-- CSS -->
    <style>
      .chart{
      }
    </style>

</head>
<body>
<div class="chart border rounded mx-4 my-2">
  <div>
    <canvas id="chart"></canvas>
  </div>
</div>
</div>
 
</body>
</html>

<?php
session_start();
?>

<script>
    function generateGradientColors(n, s) {
      var colors = [];
      var hueIncrement = 360 / (5*n);
      var saturation = s; // Adjust as needed
      var lightness = 50; // Adjust as needed

      for (var i = 0; i < n; i++) {
        var hue = i * hueIncrement;
        var color = 'hsl(' + hue + ', ' + saturation + '%, ' + lightness + '%)';
        colors.push(color);
      }
      
      return colors;
    }
    
    const ctx = document.getElementById('chart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['<?php echo implode("','",$_SESSION['symbols']); ?>'],
        datasets: [{
          data: ['<?php echo implode("','",$_SESSION['price']); ?>'],
          borderWidth: 1,
          backgroundColor: generateGradientColors('<?php echo $_SESSION['length'] ?>', 20),
          borderColor: generateGradientColors('<?php echo $_SESSION['length'] ?>', 100),
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
</script>

<?php
session_destroy();
?>