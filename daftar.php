<!DOCTYPE html>
<html lang="en">

<head>
    <title> Beranda Saya </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="navbar" style="background-image:url('media/bgbatik.jpg'); margin: 0px">
            <div class="text-center">
                <img src="media/android-logo-12426.png" width="120">
            </div>
            <div class="text-center">
                <h2 style="color: aliceblue; font-size:50px">W1 Ponsel</h2>
                <h4 style="color: aliceblue; font-size:10px">Melayani Dengan Sepenuh Hati</h4>
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
                                <li><a href="aritmatik.php">Aritmatika</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="col-lg-8 " style="background-image:url('assets/Bg.jpg')">
                <h1>Sign Up</h1>
                <hr>
                <form class="form-horizontal" action="  ">
                    <div class="form-group">
                        <label class="control-label col-sm-3">First Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required placeholder="First Name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Last Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required placeholder="Last Name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="example@domain.com" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Password:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control psw" placeholder="Password" name="Enter password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Re Password:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control repsw" placeholder="Re Password" name="Enter password">
                            <small class="errpsw"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                            <div class="checkbox">
                                <label><input type="checkbox" name="Remember">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-default" style="background-color:brown; color:white;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4" style="background-image:url('assets/Bg.jpg');"></div>
        </div>
    </div>
    <div id="myModal" class="modal Fade" role="dialog">
        <div class="modal-dialog">
            <!--modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Berhasil</h4>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $(".form-horizontal  ").submit(function() {

            var ps1 = $('.psw').val();
            var ps2 = $('.repsw').val();
            var valid = 0;
            $('.err').html('');
            if (ps1 == ps2) {
                valid = 1;
            } else {
                $('.errpsw').html('Passsword  Tidak  Sama');
            }
            if (valid == 0) {
                event.preventDefault();
            } else {
                $('p').html("Selamat  pendaftaran  A.N  " + $('input[name="nama  "]').val() + " telah  berhasil  ");
                $('.modal').modal('show');
                event.preventDefault();
            }
        });
    });
</script>

</html>