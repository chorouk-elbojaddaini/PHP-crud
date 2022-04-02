<?php 
include("connection.php");
if(isset($_POST["submit"])){
    
    $query = "DELETE FROM liste WHERE username='$_POST[username]'";
    mysqli_query($con,$query);
    echo "record deleted = ".mysqli_affected_rows($con);
    mysqli_close($con);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>la liste</h1>
    <form action="delete.php" method="post" >
    <label>username</label><br>
    <input type="text" name="username"/><br>
    <input type="submit" name="submit" value="delete"/><br>
    <a href="insert.php">insert</a>
    <a href="select.php">select</a>
    <a href="delete.php">delete</a>
    <a href="update.php">update</a>
</form>
</body>
</html>