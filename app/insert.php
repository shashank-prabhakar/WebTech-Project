<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Logged In</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png" />



    <style>
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

        .error {
            border: 2px solid red;
            border-radius: 10px;
            background-color: DarkSalmon;
            align: center;
            text-align: center;
            color: DarkRed;
            width: 200px;
            font-family: Raleway;
            margin: 0px auto;

            padding: 10px;
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

$Name=$_POST['name'];

$Email=$_POST['email'];

$Password=$_POST['password'];

$ChkPassword=$_POST['chkpassword'];

if(empty($Name)){
	array_push($errors, "UserName is required ");
}
if(empty($Email)){
	array_push($errors, "Email is required ");
}
if(empty($Password)){
	array_push($errors, "Password is required ");
}

if($Password != $ChkPassword){
	array_push($errors, " Passwords don't match! ");
}

if(count($errors)==0){
	$sql = "INSERT INTO members (User_Name,Email,Password,Confirm_Password)
	VALUES ( '$Name', '$Email','$Password','$ChkPassword')";



/*
$sql = "INSERT INTO members (User_Name,Email,Password,Confirm_Password)
VALUES ('john','jac@gmail.com','1234','1234')";
*/

	$insert = $conn->query($sql);
 }

$conn->close();


?>

    <?php if(count($errors)==0): ?>
    <h1> Thank you for registering! You are now logged in.</h1>

    <body background="creambg.jpg">
        <img src="logo.png" align="middle" height=40% width=40%>
        <br>
        <br>
        <br>
        <br>
        <button id="Success" onclick="location.href='index.html'">Home</button>
    </body>

</html>
<?php endif ?>

<?php if(count($errors)>0): ?>
<div class="error">
    <?php foreach ($errors as $error): ?>
    <p>
        <?php echo $error; ?>
    </p>
    <?php endforeach?>
</div>
<?php include('sign.php');?>
<?php endif ?>