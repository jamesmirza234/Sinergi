
<?php

function nilaiacak($length)
{
    $str        = "";
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}


echo nilaiacak(5); 
echo "<br>";
echo nilaiacak(10); 
echo "<br>";
echo nilaiacak(15); 
echo "<br>";

    ?>