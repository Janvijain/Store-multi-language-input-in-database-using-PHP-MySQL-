<!DOCTYPE html>
<html>
<head>
<meta type http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form</title>
<style>
body {font-family:Arial, Sans-Serif;}
form{width: 300px; margin: 0 auto;}
input[type='text']{width: 200px; border-radius: 2px;border: 1px solid #CCC; padding: 10px; color: #333; font-size: 14px; margin-top: 10px;}
input[type='submit'],input[type='reset']{padding: 10px 25px 8px; color: #fff;background-color: #0067ab;}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
</style>
</head>
<body>
    <form action="connection.php" method="POST" enctype='multipart/form-data'>
    <h2>Form</h2>
    <input type="text" name="fname" placeholder="First Name"><br><br>
    <input type="text" name="lname" placeholder="Last Name"><br><br>
    <input type="submit" name="submit" value="Submit">
    <form>
</body>
