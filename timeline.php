<?php require_once("auth.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timeline</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-3" >
<div class="p-5 text-center">
<h2>Self Check Up COVID-19</h2>

        <div class="col-md-11"  >
        <br>
        <br>
        <br>
        <div class="container" >
   <div class="row mt-3">
       <div class="col-md-10">
            <div class="card-center"  style="background-color: #FFC0CB;" >
               <div class="card-header"  >

                    <img class="img img-responsive rounded-circle mb-5"  width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["username"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
                    <p><a href="cekdiri.php">Cek Diri Anda Sekarang!</a></p>

                    <p><a href="logout.php">Logout</a></p>
                    <br>
                    <br>
                    <br>
                    <br>
                   

                     <br>
                     <br>
                </div>
            </div>

            
        </div>


        

</body>
</html>