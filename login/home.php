<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login1.php');
}


?>

<html>
<head>
<title> </title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="container">
   

   <h2 class ="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2>
   <a href="logout.php">LOGOUT</a>
</div>

</body>


</html>