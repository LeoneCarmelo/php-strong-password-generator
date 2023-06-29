<?php
session_start();

function genPass()
{
    if (isset($_GET["length"])) {
        if (is_numeric($_GET["length"])) {
            if ($_GET["length"] >= 8) {
                $pass_length = $_GET["length"];
                $data = '';
                if (isset($_GET["lettere"])) {
                    $data .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                }
                if (isset($_GET["numeri"])) {
                    $data .= '0123456789';
                }
                if (isset($_GET["simboli"])) {
                    $data .= '!@#$%^&*-+{}:></?)(][';
                }
                if ($_GET["repetitions"] == 'si') {
                    echo get_pass($data, $pass_length); 
                } else {
                    echo get_pass_no_repetitions($data, $pass_length);
                }
            } else {
                echo 'The length must 8 or more characters';
            }
        } else {
            echo 'Type a number';
        }
    } else {
        echo 'Insert the length';
    }
}

function get_pass($data, $length) {
    $password = '';
    $arr_data = str_split($data, 1);
    //var_dump(count($arr_data));
    for ($i=0; $i < $length; $i++) { 
        $character = rand(0, count($arr_data) -1);
        $password .= $data[$character]; 
    }
    return $password;
}

function get_pass_no_repetitions($data, $length) {
    $password = '';
    $arr_data = str_split($data, 1);
    for ($i=0; $i < $length; $i++) { 
        $character = rand(0, count($arr_data) -1);
        if (str_contains($password, $data[$character])) {
            $i--;
        } else {
            $password .= $data[$character]; 
        }
    }
    return $password;

}
 
