<?php 
include("connexion.php");
if(isset($_POST["submit"])){

    $query = "SELECT * FROM liste1  WHERE username = '$_POST[username]'";
   $result = mysqli_query($con,$query);
   echo "<table border='2' width='400px'>
   <tr>
   <th>username</th>
   <th>date</th>
   <th>salaire</th>
   </tr>";
    while($row = mysqli_fetch_array($result)){
        echo"<tr>
        <td>$row[username]</td>
        <td>$row[date]</td>
        <td>$row[adress]</td>
        </tr>";
    }
    echo "</table>";
    echo "Recorder Selected =".mysqli_affected_rows($con);
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crud.css">

    <title>Select</title>
</head>
<body>
    <h1>La liste est: </h1>
    <form action="select.php" method="POST"class="container"  >
    <label>usernme</label> </br>    
    <input type="text" name="username" placeholder="ton nom "></br>
    <input type="submit" name="submit" value="Select" class="sub"></br>
<a href="insert.php" >Insert</a>
<a href="select.php" >Select</a>
<a href="delete.php" >Delete</a>
<a href="update.php" >Update</a>

</form>
</body>
</html>