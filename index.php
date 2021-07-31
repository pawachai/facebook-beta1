<?php    
    session_start();
    
    if(!$_SESSION['username']){
        header("Location : login.php");
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require("./nav.php")?>

<h1><?=$_SESSION['username']?></h1>
    
</body>
</html>


<?php }?>
