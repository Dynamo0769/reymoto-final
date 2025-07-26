<?php>
session_start();

   include("connection.php");
   include("funtions.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id =random_num(20);
            $quary = "insert into user (user_id,user_name,password) values('$user_id', '$user_name', '$password')";
            mysqli_query($con,$query);
            //header("Location: login.php");
            //die;
        } else
        {
            echo "Please enter some valid information";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <style type= "text/css">
    #text{
        height: 25px;
        border-radios: 5px;
        padding: 4px;
        border: solid thin #aaa;
        widht: 100%;
    }
    #button{
        padding: 10px;
        width:100px;
        color: white;
        background-color: lightblue;
        border: none;
    }
    #box{
        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
</style>

<div id="box">
    <form method="post">
        <div style="font-size: 20px; margin: 10px; color: white;">Sign_up</div>
        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="text" name="password"><br><br>
        <input id="button" type="submit" value="Sign Up"><br><br>

        <a href="login.php">Click to Log In</a><br><br>

    </form>

</div>
</body>
</html>