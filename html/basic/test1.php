<?php
    // 한줄 주석
    /* 여러줄 주석*/
    $value = "1"; // String
    var_dump($value);

    $value = 1; // int
    var_dump($value);

    // $value = 1."1"; // 페이지 동작하지 않음.
    // var_dump($value);

    $value = 1.1; // float
    var_dump($value);

    $value = "1"."1"; // float
    var_dump($value);
?>

<?php
    function function_name($number){
        echo $number*2;
    }

    function_name(10);

    function function_name2($number){
        return $number*2;
    }

    echo function_name2(10);
?>