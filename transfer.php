<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/banking.css" rel="stylesheet" />
    <style>

    body{
      background-image: url(https://static.vecteezy.com/system/resources/previews/002/071/082/original/template-design-abstract-dark-blue-gradient-stripes-overlap-layer-background-with-lighting-vector.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    input[type=submit]{
    background-color: #15C1C8;
    color: black;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: block;
    }
    form{

        margin-left:250px;
    }
    select{
      display: block;
      font-size: 16px;
      font-family: sans-serif;
      padding: 12px 8px;
      align:"center";
      width: 60%;
      box-sizing: content-box;
      box-shadow: 0 1px 0 1px rgba(0,0,0,.04);


      }
      input[type=text]{
        display: block;
        font-size: 16px;
        font-family: sans-serif;
        padding: 12px 8px;
        align:"center";
        width: 50%;
        box-sizing: content-box;
        box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
      }
      h1{
          color:white;
      }
      h2{
          color:white;
      }
    </style>
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
              <li class="nav-item">
                    <a class="nav-link tm-nav-link" href="index.php">Home</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link tm-nav-link" href="users.php">VIEW USERS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link tm-nav-link" href="#">TRANSFER MONEY<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tm-nav-link" href="trans_history.php">TRANSACTION HISTORY</a>
                </li>

            </ul>
        </div>
    </nav>
</div>
</div>
  </div>

<h1><b><i>Transfer Money</b></i></h1>

    <div class="form">
    <form  method="POST" action="Viewtransactions.php">
    <h2>Sender:</h2>
    <select name="sender" >
            <option value=sender>Choose sender</option>
            <option value="vaish">vaish</option>
            <option value="priya">priya</option>
            <option value="giri">giri</option>
            <option value="naru">naru</option>
            <option value="rohit">rohit</option>
            <option value="sai">sai</option>
            <option value="shaddy">shaddy</option>
            <option value="ara">ara</option>
            <option value="dd">dd</option>
            <option value="deepu">deepu</option>
    </select>
    <br>
    <h2>Receiver:</h2>
    <select name="receiver" >
      <option value=sender>Choose receiver</option>
      <option value="vaish">vaish</option>
      <option value="priya">priya</option>
      <option value="giri">giri</option>
      <option value="naru">naru</option>
      <option value="rohit">rohit</option>
      <option value="sai">sai</option>
      <option value="shaddy">shaddy</option>
      <option value="ara">ara</option>
      <option value="dd">dd</option>
      <option value="deepu">deepu</option>
    </select>
    <h2>Amount: </h2><input type="text" name="amount"><br>
    <input type="submit" value="Transfer money">
    </form>
    </div>
</div>
</body>
</html>
