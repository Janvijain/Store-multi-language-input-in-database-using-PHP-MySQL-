<?php
$fname = "";
$lname ="";
$db = mysqli_connect('localhost', 'root', '', 'language');
if (isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
mysqli_set_charset($db,'utf8');
$query = "INSERT INTO user (`fname`, `lname`) VALUES ('$fname' , '$lname')";
mysqli_query($db,$query);
header('location:form.php');
}