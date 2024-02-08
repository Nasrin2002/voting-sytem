<!DOCTYPE html>
<html lang="en">
<head>
    <title>Voting system</title>
    <link rel="stylesheet" href="./voting-login.css">
</head>
<body>
    <center>
    <nav id="tit">
        <h1>Online Voting System</h1>
    </nav>

    <div class="page">
    <form action="./actions/login.php" method="POST">
        <h2>Login Now</h2><br>

        
        <input type="text" name="username" placeholder="Enter name.. " required><br>
        <input type="text" name="mobileno" placeholder="Enter mobile no  " required><br>
        <input type="password" name="password" placeholder="Enter password "required><br>
        <select name="std" id="dropdown" required><br>
            <option value="voter">Voter</option>
            <option value="group">Group</option>
        </select><br>
        <button> Vote </button><br>
        <span>Don't have an account?<a href="./partial/voting-register.php">Register now !</a></span>
    </form>
    </div>
    </center>
</body>
</html>