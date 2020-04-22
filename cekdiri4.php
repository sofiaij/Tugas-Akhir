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

               <h4>4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri?</h3></header><section><p class="text-info large"></p><nav></i> (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</h4><div class="large text-center">
            <br>
            
            <a href="tidak.php" class="btn btn-secondary">Ya</a>
            <a href="cekdiri5.php" class="btn btn-secondary">Tidak</a>
            <br>
              <br>
                </div>
            </div>
           
        </div>
    
    </div>
</div>



</body>
</html>