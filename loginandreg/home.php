<?php 

session_start();
if( ! isset($_SESSION['Username'])){
    header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">


</head>
<body>
 
 <div class="container"> 
<a class="float-right" href="logout.php"> LOGOUT </a>

<h1 class="urembo"> Welcome  <?php echo $_SESSION['Username']; ?> </h1>

</div>
    
</body>
</html>
