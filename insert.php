<?php 
include("connection.php");
if(isset($_POST["submit"])){
    $username = htmlspecialchars(trim(strtolower($_POST['username'])));
    $date = htmlspecialchars(trim(strtolower($_POST['date' ])));
    $adress = htmlspecialchars(trim(strtolower($_POST["adress"])));
    $query = "INSERT INTO liste(username,date, adress)VALUES('$username','$date','$adress')";
    mysqli_query($con,$query);
    echo "record inserted = ".mysqli_affected_rows($con);
    mysqli_close($con);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <h1>la liste</h1>
    <form action="insert.php" method="post" >
    <label>username</label><br>
    <input type="text" name="username"/><br>
    <label>date de naissance</label><br>
    <input type="text" name="date"/><br>
    <label>Adresse</label><br>
    <input type="text" name="adress"/><br>
    <input type="submit" name="submit" value="insert"/><br>
    <a href="insert.php">insert</a>
    <a href="select.php">select</a>
    <a href="delete.php">delete</a>
    <a href="update.php">update</a>
</form>
</body>
</html>