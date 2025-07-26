<?php

funtion check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqlli_num_rows($result) > 0)
        {
            $user_data = mysli_ftch_assoc($result);
            result $user_data;
        }
    }

    //redirect to log in
    heder("Location: login.php");
    die;
}function random_num($legth)
{
$text = "";
if($legth < 5)
{
    $length = 5;
}
$len = rand(4, $length);

for ($i=0; $i < $len; $i++) {
   $text .= rand(0,9);

}
return $text;
}