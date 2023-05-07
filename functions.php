<?php
session_start();
$length = $_GET["length"];
$letters = $_GET["lettere"];
$numbers = $_GET["numeri"];
$symbols = $_GET["simboli"];
//var_dump($symbols);

$data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
$dataLetters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$dataNumbers = '0123456789';
$dataSymbols = '!@#$%^&*';
$dataLength = strlen($data) - 1;
$dataLettersLength = strlen($dataLetters) - 1;
$dataNumbersLength = strlen($dataNumbers) - 1;
$dataSymbolsLength = strlen($dataSymbols) - 1;
$password = [];
function genPassword($length, $dataLength, $data)
{
    if ($length != null) {
        if (is_numeric($length)) {
            if ($length >= 8) {
                for ($i = 0; $i < $length; $i++) {
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
function generator($letters, $numbers, $symbols, $length)
{
    if ($length != null) {
        if(is_numeric($length)) {
            if ($length >= 8) {
                if ($letters === "on" && $numbers === "on" && $symbols === "on") {
                    $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
                    $dataLength = strlen($data) - 1;
                    genPassword($length, $dataLength, $data);
                } elseif ($letters === "on" && $numbers === "on" && $symbols === null) {
                    $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                    $dataLength = strlen($data) - 1;
                    genPassword($length, $dataLength, $data);
                } elseif ($letters === "on" && $numbers === null && $symbols === "on") {
                    $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*';
                    $dataLength = strlen($data) - 1;
                    genPassword($length, $dataLength, $data);
                } elseif ($letters === null && $numbers === "on" && $symbols === "on") {
                    $data = '0123456789!@#$%^&*';
                    $dataLength = strlen($data) - 1;
                    genPassword($length, $dataLength, $data);
                } elseif ($letters === "on" && $numbers === null && $symbols === null) {
                    $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $dataLength = strlen($data) - 1;
                    genPassword($length, $dataLength, $data);
                } elseif ($letters === null && $numbers === "on" && $symbols === null) {
                    $data = '0123456789';
                    $dataLength = strlen($data) - 1;
                    genPassword($length, $dataLength, $data);
                } elseif ($letters === null && $numbers === null && $symbols === "on") {
                    $data = '!@#$%^&*';
                    $dataLength = strlen($data) - 1;
                    genPassword($length, $dataLength, $data);
                } else {
                    echo "Please select one of the options below";
                }

            } else {
                echo "The length has to be at least 8 charachter";   
            }
        } else {
            echo "Please insert a number";
        }
    } else {
        echo "Please insert how long the password has to be";
    }
}