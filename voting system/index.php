<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background-color: rgb(182, 126, 235);
        }
        h1{
            margin-top: 100px;
            font-size: 100px;
            font-weight: 600;
            background-color: rgb(53, 12, 92);
            color: white;
            margin-bottom: 100px;
        }
        .content{
            text-align: center;
            text-decoration:double;
            font-size: 30px;
            font-weight: 400;
            color: rgb(39, 11, 66);
        }
        button{
            width: 200px;
            height: 50px;
            border-radius: 20px;
            background-color: rgb(33, 7, 82);
            color: white;
            font-size: 30px;
        }
        @media(max-width:700px){
            h1{
                padding: 20px;
                font-size: 45px;
            }
            .content h3{
                margin: 20px;
                font-size: 30px;
                text-align: center;
            }
            a button{
                width: 150px;
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <h1 align="center">Online Voting System</h1><br><br><br>
    
    <div class="content">
        <h3>It's not the voting that's democracy; it's the counting.</h3><br>
        <h3>A man without a vote is a man , without a protection ,to protect you and your country <br> A single vote can change a government</h3><br><br>
        <a href="./voting-login.php"><button>LOGIN</button></a>
    </div>
</body>
</html>