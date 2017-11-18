<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>



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

    </style>

</head>


<body background="creambg.jpg">



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

$Name=$_POST['name'];

$Email=$_POST['email'];

$Password=$_POST['password'];

$ChkPassword=$_POST['chkpassword'];

$sql = "INSERT INTO members (User_Name,Email,Password,Confirm_Password)
VALUES ( '$Name', '$Email','$Password','$ChkPassword')";



/*
$sql = "INSERT INTO members (User_Name,Email,Password,Confirm_Password)
VALUES ('john','jac@gmail.com','1234','1234')";
*/

$insert = $conn->query($sql);

$conn->close();

?>


<h1> Thank you. You are now logged in.</h1>
    <img src="logo.png" align="middle" height=40% width=40%>
    <br><br><br><br>
    <button onclick="location.href='index.html'">Home</button>
</body>


</html>