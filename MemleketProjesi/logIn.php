<?php

$var = false;
checkLog();

function checkLog()
{
    if($_POST["username"] == "Senkram")
    {
        if($_POST["password"] == "1234")
        {
            if($_POST["email"] == "tuna.yigit@ogr.sakarya.edu.tr")
            {
                $var = true;
                echo "hoşgeldin".$_POST["username"];
            }
        }
    }

    if($var == false)
    {
        header("Location: logInpage.html");
    }

}   

?>