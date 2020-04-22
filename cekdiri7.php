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
                <div class="card-body" style="background-color: #FFC0CB;"  align=center>
               
                <h2>kesimpulan</h2>   
						
						<p class="text-info">Anda kemungkinan besar tidak terinfeksi oleh COVID-19, Namun anda disarankan untuk tetap tinggal dirumah. Infeksi anda mungkin disebabkan virus selain COVID-19, Oleh karena itu anda tidak perlu dites oleh COVID-19. Meskipun demikian, hindarilah keluar rumah jika memungkinkan. Penyakit anda akan sembuh sendiri dengan cukup makan dan istirahat
						</p>
						<p class="text-info">Apabila anda mengalami gejala atau mendapatkan informasi baru tentang perjalanan penyakit anda, anda bisa membuka web ini lagi.
                        </p>
                        <br>
            
               <p><a href="cekdiri.php">Self Checkup Lagi</a></p>
						<p>Terimakasih telah menggunakan test ini, semoga anda sehat selalu.</p><p>Tetap waspada, tidak perlu panik.</p><p>Call center dan rumah sakit kita di Jawa Timur siap selalu untuk melayani anda</p><p>Hubungi <a href="tel:1500117" class="label maroon">1500 117</a></p></footer></div></div></div>
            
               <br>
           
            
            
       
         
                </div>
            </div>
           
        </div>
    
    </div>
</div>



</body>
</html>
