<?php
include 'libs/connection.php';
?>
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
        <link rel="stylesheet"href="libs/style.css"type="text/css">
    </head>
    <body>

        <div class="topnav">
            <a class="active" href="home.php">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <div class="login-container">
                <?php if (isset($_SESSION['email'])) { ?>
                    <a href="javascript:void()" type="submit"onclick="logout()"><b><?= $_SESSION['user'] ?></b>&nbsp;<span class="btn btn-danger btn-sm">Logout</span></a>
                    <?php
                } else {
                    echo '';
                }
                ?>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="card" style="width:100%">
                        <h2 class="text-center"><span id="ccuser"></span></h2>
                        <div class="card-body text-center">
                            <h4 class="card-title">Bit Coins</h4>
                            <h3 class="card-title">Fixed price @<b><span id="coinPrice"></span>&nbsp;Tk.</b></h3>
                            <input type="hidden"name="cuser"id="cuser"value="">
                            <div class="form-inline">
                                <label class="control-label col-4">Pay Amt</label>
                                <input type="text"class="form-control col-8"name="cprice"id="cprice"value="">
                            </div>
                            <p class="card-text text-justify">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="javascript:void()"type="button" class="btn btn-primary"onclick="payamt()">Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <script>
            var cartValue = sessionStorage.getItem("cart");
            var cartObj = JSON.parse(cartValue);
            $('#ccuser').html(cartObj.user);
            $('#coinPrice').html(cartObj.price);
            $('#cuser').val(cartObj.user);

            function payamt() {
                var userc = $('#cuser').val();
                var pricec = $('#cprice').val();
                window.location.href = 'checkout.php?user=' + userc + '&price=' + pricec;
            }
        </script>
    </body>
</html>