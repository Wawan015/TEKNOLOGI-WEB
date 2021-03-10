<?php

$x = isset($_POST['x']) ? $_POST['x'] : '0';
$y = isset($_POST['y']) ? $_POST['y'] : '0';

$n = 10;
$hasil = "$x $y";

for ($i = 0; $i <= $n - 3; $i++) {

  $output = $x + $y;

  $hasil = $hasil . " $output";


  $x = $y;
  $y = $output;
}

?>
<html>

<head>
  <title> wawan </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="container">
    <div class="navbar" style="background-image:url('media/bg.jpg'); margin: 0px">
      <div class="text-center">
        <h2 style="color: green; font-size:50px; font-family: chili;">Deret Fibonacci</h2>
      </div>
    </div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id=myNavbar>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="https://g.page/greace-bali?share">Alamat</a></li>
            <li><a href="#">Bantuan</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown"> Lainnya <span class="caret"></span></a>
              <ul class="dropdown-menu ">
                <li class="active"><a href="fibonacci.php">Fibonacci</a></li>
                <li><a href="aritmatik.php">Aritmatika</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <hr>
    <div style="width:250px">
      <form action="" method="post">
        <H4> Deret ke-1 </H4> <input class="form-control " type="number" placeholder="Masukkan Deret pertama" name="x" required />
        <H4> Deret ke-2 </H4> <input class="form-control " type="number" placeholder="Masukkan Deret Kedua" name="y" required />
        <button type="submit" class="btn btn-primary btn-block daftar-btn" style="margin-top:5">Submit</button>
      </form>
    </div>
    <hr>
    <h3>Hasil Deret Bilangan Fibonacci</h3>
    <div class="form-group">
      <h4 style="font-size:20px; font-family:chili;">Hasil : <?php echo $hasil; ?></h4>
    </div>
  </div>
</body>

</html