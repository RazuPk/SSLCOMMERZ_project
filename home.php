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
                <div class="col-3">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="lib/image/bitcoin-2007769__480.jpg" alt="Card image" style="width:100%">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bit Coins</h4>
                            <h3 class="card-title">Fixed price @<b>340Tk.</b></h3>
                            <p class="card-text text-justify">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="javascript:void()"type="button" class="btn btn-primary"onclick="processPay('<?= $_SESSION['user'] ?>', 340)">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="lib/image/bitcoin-2007769__480.jpg" alt="Card image" style="width:100%">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bit Coins</h4>
                            <h3 class="card-title">Fixed price @<b>520Tk.</b></h3>
                            <p class="card-text text-justify">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="javascript:void()"type="button" class="btn btn-primary"onclick="processPay('<?= $_SESSION['user'] ?>', 520)">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="lib/image/bitcoin-2007769__480.jpg" alt="Card image" style="width:100%">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bit Coins</h4>
                            <h3 class="card-title">Fixed price @<b>650Tk.</b></h3>
                            <p class="card-text text-justify">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="javascript:void()"type="button" class="btn btn-primary"onclick="processPay('<?= $_SESSION['user'] ?>', 650)">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="lib/image/bitcoin-2007769__480.jpg" alt="Card image" style="width:100%">
                        <div class="card-body text-center">
                            <h4 class="card-title">Bit Coins</h4>
                            <h3 class="card-title">Fixed price @<b>730Tk.</b></h3>
                            <p class="card-text text-justify">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="javascript:void()"type="button" class="btn btn-primary"onclick="processPay('<?= $_SESSION['user'] ?>', 730)">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <script>
            function logout() {
                var action = 'logout';
                $.ajax({
                    type: 'POST',
                    url: 'libs/logincheck.php',
                    data: {action: action},
                    success: function (data) {
                        if (data == 'logout') {
                            location.reload();
                        }
                    }
                });
            }

            function processPay(user, price) {
                var cart = {
                    user: user,
                    price: price
                };
                var jsonStr=JSON.stringify(cart);
                sessionStorage.setItem("cart", jsonStr);
                window.location.href = 'process.php';
            }
        </script>
    </body>
</html>


