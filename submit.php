<?php
//Client
$name = $_POST["name"];
$psw  = $_POST['password'];
//
$host = "root";
$server = "127.0.0.1";
$pass = "";
$db = "ETC";
//
$conn = mysqli_connect($server,$host,$pass,$db); //server details
//
$querry2 = "SELECT * FROM STUDENTS
            where name = '$name' and pass = '$psw' ";
$results = mysqli_query($conn,$querry2);
$details = mysqli_fetch_assoc($results);
if($details['name']==null){
    echo $_SERVER("index.html");
}
mysqli_close($conn);//CONNCETION Closed
?>
