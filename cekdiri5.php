<?php require_once("auth.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Timeline</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
<br>

            <div class="card">
                <div class="card-body text-center" style="background-color: #FFC0CB;">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h5><?php echo  $_SESSION["user"]["username"] ?></h5>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">

            <form action="" method="post" />
                <div class="form-group">
                  
                </div>
            </form>
            <div class="card mb-5"  >
                <div class="card-body" style="background-color: #FFC0CB;" >
                <br>

               <h4>5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4><div class="large text-center">
            <br>
            
            <a href="tidak.php" class="btn btn-secondary">Ya</a>
            <a href="cekdiri6.php" class="btn btn-secondary">Tidak</a>
            <br>
              <br>
                </div>
            </div>
           
        </div>
    
    </div>
</div>



</body>
</html>