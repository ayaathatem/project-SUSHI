<?php

$fullname=$_REQUEST['FULL NAME'];
$phone=$_REQUEST['PHONE'];
$numberofpeople=$_REQUEST['NUMBER OF PEOPLE'];
$day=$_REQUEST['DAY'];
$time=$_REQUEST['TIME'];




if(isset($_POST['btntest']))
{
$host="localhost";
$user ="root";
$password="";
$db="sushi1";

$conn = mysqli_connect($host,$user,$password,$db);


$insert= "insert into reservation values('$fullname','$phone','$numberofpeople','$day','$time')";
mysqli_query($conn,$insert);



if($conn){
    echo("<h1 style='color:blue;'>YOUR RESERVATION IS DONE!</h1>");
}
else{
    echo("<h1 style='color:red;'>YOUR RESERVATION IS FAILED!</h1>");
}



}