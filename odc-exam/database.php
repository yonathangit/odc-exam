<?php

    $link = mysqli_connect("localhost","user","","odc_exam");
    if (!$link)
    {
        echo "MySQL Error: " . mysqli_connect_error();
    }


?>