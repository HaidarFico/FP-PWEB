<?php
    function isPasswordValid($password){
    if (strlen($password) > 50 || strlen($password) < 6)
        return false;
    return true;
    }

    function isNameValid($name){
    $nameLength = strlen($name);
    if ($nameLength < 1 || $nameLength > 50)
        return false;
    if(preg_match('[^a-zA-Z0-9 ]', $name)){
        return false;
    }
    return true;
    }

    function isTelephoneValid($telephoneNumber){
    $telephoneNumberLength = strlen($telephoneNumber);
    if($telephoneNumberLength > 12 || $telephoneNumberLength < 9){
        return false;
    }
    if(preg_match('[^\d\s\-\+]',$telephoneNumber)){
        return false;
    }
    return true;
    }

    function isEmailValid($email){
    $emailLength = strlen($email);
    if($emailLength > 50 || $emailLength < 5){
        return false;
    }
    if(!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)){
        return false;
    }
    return true;
    }
?>