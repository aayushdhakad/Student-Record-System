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
$RollNo = $_POST['rollno'];
$Name = $_POST['username'];
$Age = $_POST['age'];
$Score = $_POST['score'];
$query = "INSERT INTO student(rollno,name,age,score) VALUES('$RollNo','$Name','$Age','$Score')";
if(mysqli_query($con,$query))
{
echo " data inserted successfully";
}
?>
