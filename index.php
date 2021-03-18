<?php
session_start();

if(isset($_SESSION['username'])){
     $_SESSION['msg']= "You must login to view this page";
     header("location :login.php")
}


if(isset($_GET['logiut'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location :login.php");


}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home page </title>
</head>
<body>

<h1>This homepage designed by dropya and dronya </h1>
<?php
if(isset($_SESSION['Success'])):?>
<div>
<h3> 
 echo $_SESSION['success'];
 unset ($_SESSION['success'];
 ?>
</h3>
</div>
<?php endif ?>
//if the user logs in print information about him
<?php if(isset($_SESSION['username'])) ?>
<h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>

<button><a href="index.php?logout='1'"></a></button>
<?php endif ?>

</body>
</body>
</html>