<?php
$con = mysqli_connect ("fdb31.biz.nf","4024908_job","E2j2S0#G1!6DYLF}","4024908_job");
 
if(isset($_POST["submit"]))
{
$name = $_POST["name"];
$fname = $_POST["fname"];
$date = $_POST["date"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$aadhar  = $_POST["aadhar"];
$pancard = $_POST["pan"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$state = $_POST["state"];
$country = $_POST["country"];

$query = "INSERT INTO fastpage(NAME, FNAME, DATA, GENDER, EMAIL, PHONE, AADDAR, PANCARD, ADDRESS, CITY, PINCODE, STATE, COUNTRY) VALUE ('".$name."','".$fname."','".$date."','".$gender."','".$email."','".$phone."','".$aadhar."','".$pancard."','".$address."','".$city."','".$pin."','".$state."','".$country."')"; 
$run = mysqli_query($con,$query);
}
 
 //redirect
   header ("Location:forma.html")

 ?>