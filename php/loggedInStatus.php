<?php

function isUserLoggedIn()
{
    return isset($_SESSION['role']);
}

function isAdmin()
{
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function isClubAdmin()
{
    return isset($_SESSION['role']) && $_SESSION['role'] === 'club_admin';
}

function isUser()
{
    return isset($_SESSION['role']) && $_SESSION['role'] === 'user';
}

/**
 * @param $bool true or false
 */
function setLoginFailed(){
    $_SESSION['login_failed'] = true;
}

function setLoginSuccessful(){
    // unset variable to indicate no problem
    unset($_SESSION['login_failed']);
}

function isLoginSuccess(){
    if(isset($_SESSION['login_failed'])){
        return false;
    }else{
        return true;
    }
}



//create get user id
