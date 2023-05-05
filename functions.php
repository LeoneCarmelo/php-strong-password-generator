<?php
$length = $_GET["length"];
//var_dump($length);

$data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
$dataLength = strlen($data) - 1 ;
$password = [];
function genPassword($length, $dataLength, $data){
    if($length != null) {
        if (is_numeric($length)) {
            if ($length >= 8) {
                for ($i=0; $i < $length; $i++) { 
                    $character = rand(0, $dataLength);
                    $password[] = $data[$character]; 
                }
                echo implode($password);
            } else {
                echo "The length has to be 8 charachter minimum";
            }
        } else {
            echo "Please insert a number";
        }
    }
}