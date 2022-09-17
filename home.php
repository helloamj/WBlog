<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('location:Login1.php');
}
?>

<html>
 <head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

    <a class="float-right" href="logout.php">LOGOUT</a>
<h1>WELCOME <?php echo $_SESSION['username']; ?></h1> 
</div>
</body>

</html>