<!DOCTYPE html>
<html lang="en">
<style>
body{
  background-image: url("https://okcredit-blog-images-prod.storage.googleapis.com/2020/09/online-transfer-4.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banking System</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/banking.css" rel="stylesheet" />

</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">VAISH BANK OF INDIA</h1>
                            <p class="tm-slogon">ONLINE BANKING SYSTEM</p>
                        </div>
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button"
                            data-toggle="collapse" data-target="#navbar-nav"
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="users.php">VIEW USERS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="transfer.php">TRANSFER MONEY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="trans_history.php">TRANSACTION HISTORY</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        <h2 class="mb-5 tm-content-title">STEPS INVOLVED IN MONEY TRANSFER</h2>
                        <i class="mb-5" style="font-size: 20px; font-family: inherit;"  >

      1. View the Users list <br>
      2. Select the sender and receiver's name and transfer<br>
      3. View the transaction history to check if the money transfer is updated <br></i>



                    </section>
                </main>
            </div>
        </div>

        <div class="tm-row">

            <div class="tm-col-right tm-col-footer">

            </div>
        </div>

        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/opms-script.js"></script>
</body>
</html>
