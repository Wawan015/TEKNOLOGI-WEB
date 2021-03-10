<?php

$a = "";
$b = "";
$n = "";
$hasil = "";
$baris = "";
$barishasil = "";


if (isset($_POST['submit'])) {

    $a = $_POST["a"];
    $b = $_POST["b"];
    $n = $_POST["n"];

    $fa = $a;
    $fb = $b;
    $fn = $n;

    $hasil = $fa + ($fn - 1) * $fb;

    for ($i = 1; $i < $fn + 1; $i++) {
        $baris = $fa + ($i - 1) * $fb;
        $barishasil .= $baris . " ";
    }
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
                <h2 style="color: green; font-size:50px; font-family: chili;">Barisan aritmatika</h2>
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
                                <li><a href="fibonacci.php">Fibonacci</a></li>
                                <li class="active"><a href="aritmatik.php">Aritmatik</a></li>
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
        <div class="col-12 col-md-5">
            <form method="POST" action="#" class="bg-white form-container p-3" id="forminput">
           
                <H5> Suku Pertama </H5> <input type="number" class="form-control" value="<?php echo $a; ?>" id="a" placeholder="Masukkan suku pertama" name="a" required />
                <H5> Beda </H5> <input type="number" class="form-control" value="<?php echo $b; ?>" id="b" placeholder="Masukkan beda" name="b" required />
                <H5> Suku Ke-n </H5> <input type="number" class="form-control" value="<?php echo $n; ?>" id="n" placeholder="Masukkan suku ke-berapa yang akan dicari" name="n" required />
                <button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit" style="margin-top: 5px;">Submit</button>
                <div class="form-group">
                <hr style="width: 253%;">
                    <h4><b>Hasil Barisan Aritmatika</b></h4>
                </div>
                <div class="form-group">
                    <h4>Baris aritmatika</h4>
                    <h4 style="background-color:rgb(134, 134, 134); color: white;border-radius: 5px;"><?php echo $barishasil; ?></h4>
                </div>
                <div class="form-group">
                    <h4>Nilai suku ke-n</h4>
                    <h4 style="background-color: rgb(134, 134, 134); color: white; border-radius: 4px;"><?php echo $hasil; ?></h4>
                </div>
            </form>
        </div>
    </div>


</body>

</html