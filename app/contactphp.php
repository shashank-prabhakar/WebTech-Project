<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
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
    </style>
</head>

<body background="creambg.jpg">
    <?php

function feed()
{
    $Name=$_POST['Name'];
    $Number=$_POST['phone'];
    $Message=$_POST['Message'];
    $fp=fopen("feedback.txt","a") or die("Unable to open file!");
    fwrite($fp,"Name: " . $Name . " \n");
    fwrite($fp,"Phone Number: " . $Number . " \n");
    fwrite($fp,"Message: " . $Message . " \n");
    fwrite($fp,"\n");
    fclose($fp);
}
feed();
?>
    <h1> Thank you. Your response has been recorded.</h1>
    <img src="logo.png" align="middle" height=40% width=40%>
    <br><br><br><br>
    <button onclick="location.href='index.html'">Home</button>
</body>

</html>