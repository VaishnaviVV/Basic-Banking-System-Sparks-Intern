<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All transactions</title>
  <style>
    a{
    background-color: black;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: block;
    }
    h1 {
    color: green;
    padding: 15px 20px;
    text-align: left;
    margin-top:16px;
    margin-right: 180px;
    margin-left:480px;
    }
    .bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
    }
  </style>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";

    $conn = new mysqli($servername, $username,"",'bank');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $amount = $_POST["amount"];

    $s1sql="select balance from users where name=?";
    $s1stmt=$conn->prepare($s1sql);
    $s1stmt->bind_param('s',$sender);
    $s1stmt->execute();
    $s1result=$s1stmt->get_result();
    //$s1row=$s1result->fetch_assoc();
    while($s1row=$s1result->fetch_assoc())
    {
      //echo '<h1>'.$s1row['balance'].'</h1>';
      if($amount>$s1row['balance'])
      {
        echo '<script>alert("Transfer amount cannot be larger than balance."); window.location.href="http://localhost/sparks-intern/transfer.php";</script>';
      }
      else if($amount==0)
      {
        echo '<script>alert("Transfer amount cannot be zero."); window.location.href="http://localhost/sparks-intern/transfer.php";</script>';
      }
      else{
        $tq="insert into transactions(sender,receiver,amount) values (?, ?, ? )";
        $st=$conn->prepare($tq);
        $st->bind_param('sss',$sender, $receiver, $amount);
        $st->execute();
        $result=$st->get_result();

        $ssql="select balance from users where name=?";
        $sstm=$conn->prepare($ssql);
        $sstm->bind_param('s',$sender);
        $sstm->execute();
        $result=$sstm->get_result();
        if ($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
          $ups= $row["balance"]-$amount;
        }
        }

        $susql="update users set balance=? where name=?";
        $sustm=$conn->prepare($susql);
        $sustm->bind_param('ss',$ups,$sender);
        $sustm->execute();
        $resultsu=$sustm->get_result();

        $rsql="select balance from users where name=?";
        $rstm=$conn->prepare($ssql);
        $rstm->bind_param('s',$receiver);
        $rstm->execute();
        $resultr=$rstm->get_result();
        if ($resultr->num_rows > 0){
        while($row=$resultr->fetch_assoc()){
          $upr= $row["balance"]+$amount;
        }
        }

        $rusql="update users set balance=? where name=?";
        $rustm=$conn->prepare($rusql);
        $rustm->bind_param('ss',$upr,$receiver);
        $rustm->execute();
        $resultru=$rustm->get_result();

        echo '<h1>Your transaction is succesful! Thank You!</h1>';




      }
    }

?>
</div>
</body>
</html>
