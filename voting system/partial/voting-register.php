<!DOCTYPE html>
<html lang="en">
<head>
    <title>voting registeration page</title>

    
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        body{
            background-color: rgb(173, 112, 230);
        }
        #tit{
            color: white;
            background-color: rgb(31, 9, 41);
            font-weight: 600;
            font-size: 40px;
            text-align: center;
            margin-top: 50px;
        }
        .page{
            background-color: transparent;
            width: 600px;
            height: 500px;
            padding: 20px;
        }
        .page input {
            width: 500px;
            height: 20px;
            border-radius: 30px;
            font-size: 20px;
            padding: 10px;
            margin: 10px;
            background-color: white;
            border: none;
        }
        .page  select{
            width:500px;
            height: 40px;
            border-radius: 30px;
            font-size: 20px;
            color: black;
            padding: 10px;
            margin: 10px;
        }
        .page h2{
            margin-bottom: 50px;
            font-size: 50px;
            font-weight: 200px;
        }
        .page button{
            width: 150px;
            margin: 20px;
            height: 40px;
            font-size: 20px;
            border-radius: 30px;
            color: black;
            background-color: rgb(149, 57, 235);
        }
        .page button:hover{
            color:white;
            background-color: orangered;
        }
        .page span{
            margin: 30px;
            padding: 10px;
            font-size: 30px;
            font-weight: 100px;
            color: black;
        }
        .page span a{
            color: rgb(37, 13, 59);
        }
        @media(max-width:700px){
            h1{
                padding: 30px;
                font-size: 45px;
            }
        }
    </style>
</head>
<body>
    <nav id="tit">
        <h1>Online Voting system</h1>
    </nav>

    <center>
    <div class="page">
    <form action="../actions/register.php" method="POST" enctype="multipart/form-data"><br>
        <h2>Register Here</h2>

        
        <input type="text" name="username" placeholder="Enter name.. " required><br>
        <input type="text" name="mobileno" placeholder="Enter mobile no  " required><br>
        <input type="password" name="password" placeholder="Enter password "required><br>
        <input type="password" name="cpassword"  placeholder="Enter confirm password "required><br>
        <input type="file" name="photo">
        <select name="std" id="dropdown" ><br>
            <option value="Voter">Voter</option>
            <option value="Group">Group</option>
        </select><br>
        <button> Register now </button><br>
        <span>Already have an account?<a href="../voting-login.php">Login here !</a></span>
    </form>
    </div>
    </center>
</body>
</html>