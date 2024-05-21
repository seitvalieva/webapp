<?php
    session_start();

    if(isset($_POST['submit'])){
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $qqt = filter_input(INPUT_POST, "qqt", FILTER_VALIDATE_INT);

        if($name && $price && $qqt){
            $product = [
                "name" => $name,
                "price" => $price,
                "qqt" => $qqt,
                "total" => $price*$qqt
            ];
            $_SESSION['products'][] = $product;
        }
    }
    header("Location:index.php");