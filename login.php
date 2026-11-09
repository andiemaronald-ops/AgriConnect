<?php

include("db.php");

if(isset($_POST['login'])){

$email=$_POST['email'];

$password=$_POST['password'];

$sql=
"SELECT * FROM users
WHERE email='$email'";

$result=
$conn->query($sql);

if($result->num_rows>0){

echo "Login Successful";

}else{

echo "Invalid Credentials";

}

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">

<h2>Login</h2>

<form method="POST">

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
name="login">
Login
</button>

</form>

</div>

</body>
</html>