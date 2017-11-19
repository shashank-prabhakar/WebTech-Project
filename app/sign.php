<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="device=device-width" , initial-scale="1.0" />
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <title>Sign Up/ Sign In</title>
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

        form {
            text-align: center;
            vertical-align: bottom;
            background-color: lightyellow;
            font-family: Raleway;
            color: steelblue;
            border-radius: 50px;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 30px;
            margin-bottom: 30px;
        }


        button {

            font-size: 80%;
            width: 16.5%;
            background-color: teal;
            color: white;
            font-family: Raleway;
            border-radius: 10px;
            padding-bottom: 6px;
            padding-top: 6px;
            border-width: 0;
            font-weight: 500;
            margin-bottom: 25px;
            margin-top: 14px;

        }

        button:hover {

            background-color: orange;
            color: white;
            cursor: pointer;
            -webkit-transition-duration: 0.3s;
            transform: translateY(0px);
            


        }


        input[type=text] {


            padding: 8px 30px;
            border-radius: 10px;
            font-size: 17px;
            border-color: black;
            border-width: 1px;
            font-family: Raleway;
            background-color: rgbla(0, 0, 0, 0);
            position: relative;
            width: 24%;
            background-color: white;
            color: grey;
            text-align: center;
            margin: 14px;
            margin-top:25px;
        }


        input[type=password] {


            padding: 8px 30px;
            border-radius: 10px;
            font-size: 17px;
            border-color: black;
            border-width: 1px;
            font-family: Raleway;
            background-color: rgbla(0, 0, 0, 0);
            position: relative;
            width: 24%;
            background-color: white;
            color: grey;
            text-align: center;
            margin: 14px;
        }


        input[type=email] {


            padding: 8px 30px;
            border-radius: 10px;
            font-size: 17px;
            border-color: black;
            border-width: 1px;
            font-family: Raleway;
            background-color: rgbla(0, 0, 0, 0);
            position: relative;
            width: 24%;
            background-color: white;
            color: grey;
            text-align: center;
            margin: 14px;
        }


        .fixed {
            position: fixed;
            margin-top: 430px;
            margin-left: 1180px;
        }

        .s1 {
            background-color: aliceblue;
            border-radius: 30px;
            margin-top: 40px;
            border-color: black;
            margin-left: 150px;
            margin-right: 150px;
            box-shadow: 5px 10px 20px #bebbbb;
        }


        th {

            font-family: Raleway;
            color: teal;
            font-size: 21px;
            font-size-adjust: auto;
            float: left;
            float: inherit;
            line-height: 1.5;
            width: 500px;
            font-weight: bold;
        }

        td {

            font-weight: bold;
            font-family: Raleway;
            color: black;
            font-size: 15px;
            font-size-adjust: auto;
            float: left;
            float: inherit;
            line-height: 1.5;
            width: 500px;
            align-content: center;

        }

		
    </style>
</head>
<div>

    <body background="bg-blur.jpg" width=5 0%>

        <a href="index.html">
            <img src="Back.png" class="fixed">
        </a>
        <div class="s1">
            <br>
            <table>
                <tr>
                    <th>Already a Member?</th>
                    <th>New? Join Here</th>

                </tr>

                <tr>
                    <td>
                        <form action="login.php" method="post">
                            Username
                            <input type="text" name="u_name">
                            
                            
                            <br/> Password
                            <input type="password" name="password1">
                            <br/>
                            <button type="submit">Log In</button>
                            <br>
                        </form>

                    </td>
                    <td>
                        <form action="insert.php" method="post">
							
                            Enter Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input type="text" name="name">
                            <br/> Enter Your Email ID&nbsp
                            <input type="email" name="email">
                            <br/> Enter Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input type="password" name="password">
                            <br> Confirm Password&nbsp&nbsp&nbsp
                            <input type="password" name="chkpassword">
                            <br>
                            <button type="submit">Sign Up</button>
                            <br>
                        </form>

                    </td>
                </tr>


            </table>
            <br>
        </div>
         
    </body>


</html>