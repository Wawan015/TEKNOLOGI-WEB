<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Login Page</title>
</head>

<body>
    <div class="main-container">
        <div class="loginBox">
            <div class="userImage">
                <img src="media/android-logo-12426.png" height="100%">
            </div>
            <form id="loginForm">
                <div class="input-wrapper">
                    <label>Username</label>
                    <input type="email" class="form-control" placeholder="example@domain.com" name="email">
                    <div class="error-email">
                        <div class="email-msg"></div>

                    </div>
                </div>
                <div class="input-wrapper">
                    <label>Password</label>
                    <input type="password" name="" placeholder="Password">
                    <div class="error-pass">
                        <div class="pass-msg"></div>

                    </div>
                </div>
                <input type="button" name="" value="LOGIN" onclick="validateForm()">
                <div class="row">
                    <div class="col-sm-12 text-center" style="margin-top: 10px;">

                        <p class="text-muted" style="font-size: 10px;color:white">2021 Wawan Ponsel . All rights reserved</p>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="confirmation">
        <p>BERHASIL LOGIN</p>
    </div>
    <script>
        $(function() {
            $(".error-pass, .error-email").hide();
            
        })

        function checkEmail(email) {
            var emailReg = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            return emailReg.test(email);
        }

        function validateForm() {
            var countErrors = 0;
            var emailInput = $("input[type=email]");
            var passInput = $("input[type=password]");

            if (!checkEmail($(emailInput).val())) {
                $(".error-email").fadeIn();
                $(".email-msg").html("Username salah");
                $(emailInput).addClass("warning");
                countErrors++;
            } else {
                $(emailInput).removeClass("warning");
            }

            if (passInput.val().length < 8) {
                $(".error-pass").fadeIn();
                $(".pass-msg").html("Password yang anda masukkan salah");
                $(passInput).addClass("warning");
                countErrors++;
            } else {
                $(passInput).removeClass("warning");
            }

            setTimeout(function showErrorMsg() {
                $(".error-email, .error-pass").fadeOut();
            }, 2000)

        
        }
    </script>
</body>

</html>