<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="device=device-width" , initial-scale="1.0" />
    <title>Logged In</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <style>
        .error {
            border: 2px solid red;
            border-radius: 10px;
            background-color: DarkSalmon;
            align: center;
            text-align: center;
            color: DarkRed;
            width: 200px;
            font-family: Raleway;
            margin: 5px auto;

            padding: 10px;
        }

        h1 {
            font-family: Raleway;
            font-weight: normal;
            color: cadetblue;
            margin-left: 4%;
            font-size: 50px;
            margin-top: 8%;
            text-align: center;
            margin-bottom: 20px;
        }

        img {
            display: block;
            margin: 0 auto;
        }


        button {
            font-size: 80%;
            width: 12.5%;
            background-color: black;
            color: white;
            font-family: Raleway;
            border-radius: 30px;
            padding-bottom: 6px;
            padding-top: 6px;
            border-width: 0;
            font-weight: 500;
            margin: 5px;
            display: block;
            margin: 0 auto;
        }

        button:hover {
            text-decoration: none;
            background-color: white;
            color: black;
            cursor: pointer;


        }

        
    </style>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$errors = array();

$conn = new mysqli($servername, $username, $password, $dbname);

$UName=$_POST['u_name'];
$Password1 =$_POST['password1'];

$UName = stripslashes($UName);
$Password1 = stripslashes($Password1);

if(empty($UName)){
	array_push($errors, "UserName is required ");
}

if(empty($Password1)){
	array_push($errors, "Password is required ");
}

$sql = "SELECT * FROM members WHERE User_Name = '$UName' and Password = '$Password1' ";
$result = $conn->query($sql);
$conn->close();
?>
    <?php if(count($errors)>0): ?>
    <div class="error">
        <?php foreach ($errors as $error): ?>
        <p>
            <?php echo $error; ?>
        </p>
        <?php endforeach?>
    </div>
    <?php include('sign.php');?>

    <?php else: ?>

    <?php if ($row = $result->fetch_assoc()): ?>
    <h1> Thank you. You are now logged in.</h1>

    <body background="creambg.jpg">
        <img src="logo.png" align="middle" height=40% width=40%>
        <br>
        <br>
        <br>
        <br>
        <button id="Success" onclick="location.href='index.html'">Home</button>
    </body>

</html>

<?php else: ?>
<div class="error">
    <p>
        <?php echo "Login Failed...Please Try Again" ?>
    </p>
</div>
<?php include('sign.php');?>

</html>
<?php endif ?>
<?php endif ?>