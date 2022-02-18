<?php
    // echo "id = ";
    // echo $_GET['id'];
    $id = $_POST['id'];
    // echo " / pw = ";
    // echo $_GET['pw'];
    $pw = $_POST['pw'];

    if($id == "semin" && $pw == "QWERTY"){
        echo $id ." 님 로그인 성공! ";
    }
    else {
        echo " 로그인 실패! ";
    }
?>