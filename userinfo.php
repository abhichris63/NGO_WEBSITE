<?php

$con = mysqli_connect('localhost','root','5763');

mysqli_select_db($con, 'payments');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$number = $_POST['number'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];
$cvv = $_POST['cvv'];
$amount = $_POST['amount'];

$query = "insert into userinfodata (user, email, mobile, address, number, exp_month, exp_year, cvv, amount) 
values ('$user', '$email', '$mobile', '$address', '$number', '$exp_month', '$exp_year', '$cvv', '$amount') ";

mysqli_query($con, $query);

header('location: thanks.php');
?>



