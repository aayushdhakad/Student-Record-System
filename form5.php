<?php
if($_POST['insertdetail']){
?>
<html>
<head>
</head>
<body>
<form action="insert.php" method="post">
RollNo: <input type = "number" name="rollno">
name: <input type = "text" name="username">
age: <input type = "number" name="age">
score: <input type = "number" name="score">
<input type = "submit" name="submit detail">
</form>
</body>
</html>
<?php
}
else if($_POST['completedetail']){
?>
<?php
$servername = 'localhost:3307';
$username = 'root';
$password = "";
$dbname = "college";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
echo "server not connected";
}
else{
echo "server is connected";
}
if(!mysqli_select_db($con,$dbname)){
echo "database not connected";
}
$query = "SELECT * FROM student";
$result = mysqli_query($con,$query);
?>
<html>
<head></head>
<body>
<?php
while($row = mysqli_fetch_assoc($result)){
echo "Roll Number :".$row['rollno']. " Name : ". $row['name']. " Age : ".$row['age']. " Score ".$row['score']."<br>";}
?>
</body>
<html> 
<?php
}
else if($_POST['rolllist']){
?>
<?php
$servername = 'localhost:3307';
$username = 'root';
$password = "";
$dbname = "college";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
echo "server not connected";
}
else{
echo "server is connected";
}
if(!mysqli_select_db($con,$dbname)){
echo "database not connected";
}
$query = "SELECT rollno FROM student";
$result = mysqli_query($con,$query);
?>
<html>
<head></head>
<body>
<?php
while($row = mysqli_fetch_assoc($result)){
echo "Roll Number :".$row['rollno']."<br>";}
?>
</body>
<html> 
<?php
}
else{

?>
<?php
$servername = 'localhost:3307';
$username = 'root';
$password = "";
$dbname = "college";
$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
echo "server not connected";
}
else{
echo "server is connected";
}
if(!mysqli_select_db($con,$dbname)){
echo "database not connected";
}
$query = "SELECT score FROM student";
$result = mysqli_query($con,$query);
?>
<html>
<head></head>
<body>
<?php
while($row = mysqli_fetch_assoc($result)){
echo "Score :".$row['score']."<br>";}
?>
</body>
<html> 
<?php
}
?>
