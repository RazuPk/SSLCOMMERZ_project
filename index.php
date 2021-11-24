<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SSLCOMMERZ</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet"href="lib/style.css"type="text/css">
    </head>
    <body>

        <div class="topnav">
            <a class="active" href="home.php">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <div class="login-container">
                <form id="frmlogin"onsubmit="return false">
                    <input type="text" placeholder="Username" name="username"id="userdata"value=""required>
                    <input type="text" placeholder="Password" name="psw"id="pssdata"value=""required>
                    <button type="button"id="loaderlogin"style="background: dodgerblue;width:55px;display: none">
                        <img src="libs/image/loading.gif"width="25"height="17">
                    </button>
                    <button type="submit"onclick="logincheck()"id="loginbtn"style="background: dodgerblue;">Login</button>
                </form>
            </div>
        </div>
        <br>

        <div class="container">

        </div>
        <script>
            function logincheck() {
                if ($('#userdata').val() === '') {
                    $('#userdata').addClass('border-danger');
                } else if ($('#pssdata').val() === '') {
                    $('#pssdata').addClass('border-danger');
                } else {
                    $.ajax({
                        type: 'POST',
                        url: 'libs/logincheck.php',
                        beforeSend: function () {
                            $('#loaderlogin').show();
                            $('#loginbtn').hide();
                        },
                        data: $('#frmlogin').serialize(),
                        success: function (data) {
                            $('#loginbtn').show();
                            $('#loaderlogin').hide();
                            if (data == '1') {
                                window.location.href = 'home.php';
                            } else {
                                alert('sorry');
                            }
                        }
                    });
                }
            }
        </script>
    </body>
</html>


