<?php

include("db.php");

if(isset($_POST['register'])){

$name=$_POST['name'];

$email=$_POST['email'];

$password=password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$sql="INSERT INTO users
(name,email,password)

VALUES

('$name','$email','$password')";

if($conn->query($sql)){
echo "Registration Successful";
}else{
echo "Failed";
}

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">

<h2>User Registration</h2>

<form method="POST">

<input
type="text"
name="name"
placeholder="Full Name"
required>

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button
type="submit"
name="register">
Register
</button>

</form>

</div>

</body>
</html>
