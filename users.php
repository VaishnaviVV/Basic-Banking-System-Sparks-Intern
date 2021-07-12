<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/banking.css" rel="stylesheet" />
    <style>

    h1 {
    color: white;

    text-align: left;

    margin-right: 180px;
    }
body{
  background-image: url(https://media.istockphoto.com/videos/dark-background-video-id450145381?s=640x640);
  background-repeat: no-repeat;
  background-size: cover;
}

    .bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.9;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }
    th, td {
    text-align: center;
    padding: 16px;
    color: white;
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
                  <li class="nav-item active">
                      <a class="nav-link tm-nav-link" href="#">VIEW USERS<span class="sr-only">(current)</span></a>
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
    </div>

<h1><b><i>User Details</i></b></h1>
<table>
        <thead>
            <tr>

                <th>Name</th>
                <th>E-Mail</th>
                <th>Current Balance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $conn = new mysqli($servername, $username,"",'bank');
            $sq="select * from users";
            $stm=$conn->prepare($sq);
            $stm->execute();
            $results=$stm->get_result();
            if ($results->num_rows > 0){
            while($row=$results->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['balance']?></td>
                </tr>

            <?php
            }}
            ?>
        </tbody>
</table>
</div>
</body>
</html>
