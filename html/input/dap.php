<?php

    // echo "first = ";
    // echo $_GET['first'];
    $first = $_GET['first'];

    // echo " / type = ";
    // echo $_GET['type'];
    $type = $_GET['type'];

    // echo " / last = ";
    // echo $_GET['last'];
    $last = $_GET['last'];

    if($type == "1")
    {
        echo $first ." 더하기 ". $last . " 의 값은? ";
        echo $first+$last;
    }
    else if($type == "2")
    {
        echo $first ." 빼기 ". $last . " 의 값은? ";
        echo $first-$last;
    }
    else if($type == "3")
    {
        echo $first ." 곱하기 ". $last . " 의 값은? ";
        echo $first*$last;
    }
?>