<?php
//Client
$name = $_POST["name"];
$psw  = $_POST['password'];
//
$host = "aws.connect.psdb.cloud";
$server = "2dlgsqkpi4y17pvtmmrk";
$pass = "pscale_pw_Qsc3UmOSMXI2QpZFbOtnYtoca9EAfvIvB55H2QYQyYc";
$db = "data-table";
//
$conn = mysqli_connect($server,$host,$pass,$db); //server details
//
$querry2 = "SELECT * FROM STUDENTS
            where name = '$name' and pass = '$psw' ";
$results = mysqli_query($conn,$querry2);
$details = mysqli_fetch_assoc($results);
if(!$details['name'] && !$details['pass']){
    echo header("location: index.html");
}
setcookie("name",$details['name'],time()+36000);
mysqli_close($conn);//CONNCETION Closed
?>
