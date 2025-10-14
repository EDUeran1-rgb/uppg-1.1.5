<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$pass="";
$dbname="databas1";
$conn=mysqli_connect($host,$user,$pass,$dbname);

$texten="";
if(isset($post['btn'])){
    $texten=$_POST['txt'];
    $sql="INSERT INTO namn(url) VALUES ('$texten')";
    $result=mysqli_query($conn,$sql);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="txt" placeholder="Ange en länk">
        <input type="submit" value="Lagra länk" name="btn">
    </form>
    <?php
    $sql="SELECT * FROM namn";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<h1>".$row['url']."</h1>";
    }
    ?>
    <a href="../">tillbaka hem</a>
</body>
</html>