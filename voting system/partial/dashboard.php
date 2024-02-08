<?php
$con=mysqli_connect("localhost:3307","root","","votingsystem");

if($con->connect_error){
    die("connection failed: " . $con->connect_error);
}

session_start();
if(!isset($_SESSION['id'])){
    header('location:../voting-login.php');
}
    $data = $_SESSION['data'];
    if($_SESSION['status']==1){
        $status='<b style="color:green;">Voted</b>';
    }
    else{
        $status='<b style="color:red;">Not-Voted</b>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Voting System - Admin </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&family=Open+Sans:ital,wght@0,400;0,800;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dashboardcss.css">
</head>
<body >
    <div class="nav">
        <a href="../voting-login.php"><button>Back</button></a>
        <a href="./login-out.php"><button>Log-out</button></a>
    </div>
    <h1>Online Voting System </h1>
    <div class="container">  
        <div class="check">
    <?php 

       if(isset($_SESSION['groups'])){
           $groups =$_SESSION['groups'];
           for($i=0; $i<count($groups);$i++){
    ?>
        <div class="left">
            <div class="img">
                <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" width="150px" height="150px" alt="GroupImage">
                <br>
        <form action="../actions/vote.php" method="POST">
            <input type="hidden" name="gvotes" value="<?php  echo $groups[$i]['voters'] ?>">
            <input type="hidden" name="gid" value="<?php  echo $groups[$i]['id'] ?>">
        <?php
        if($_SESSION['status']==1){
        ?>
        <button class="vtg" >Voted</button>
        <?php }else{
        ?>
        <button class="vtr">Vote</button><br><br><br><br><br>
        <?php
            }
        ?>
        </form>
        
            </div>
            <div class="textcont">
               <strong>Group Name  :  </strong>
               <?php  echo $groups[$i]['username'] ?><br><br>
               <strong>Votes  :  </strong><?php  echo $groups[$i]['voters'] ?>
            </div>
        </div>
        <?php
           }
        }else{ ?>
        <div class="contain"><p>No groups to display</p></div>
        
    <?php }
        ?>
    </div>

        <div class="right">
            <img src="../uploads/<?php echo $data['photo']; ?>" width="200px" height="200px" alt="UserImage"><br><br>
            <strong>Name  :  </strong><?php echo $data['username']; ?><br><br>
            <strong>Mobile  :  </strong><?php echo $data['mobilenumber']; ?><br><br>
            <strong>Status  :  </strong><?php echo $status; ?><br><br>
        </div>
    </div>
</body>
</html>