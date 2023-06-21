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
        *{
            font-family: 'M PLUS Rounded 1c', sans-serif;
        }
        body{
            background:#a0d7e9;
        }
        .container{
            backdrop-filter: blur(20px); 
        }

    </style>

</head>
<body>
    <div class="container p-4 border border-dark border-opacity-10 shadow-lg rounded" style="width:400px; margin-top: 30vh;" >
        <form action="data.php" method="post">
            <div class="mb-3">
              <label class="form-label" style="color: #6C63FF;"><b>BITCOINS</b></label>
              <textarea type="text" class="form-control" placeholder="BTC,ETH,XRP" rows="5" name="symbols" required></textarea>
              <div class="form-text">Enter comma-separated symbols of Bitcoin</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
  