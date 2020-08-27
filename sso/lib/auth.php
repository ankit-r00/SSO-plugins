<?php

/**
 * auth.php
 * plugin main file
 * @package Plugins/Lib
 * @version 1.0
 */

function cookie_auth($user_login, $user){

            $url = $_SERVER['HTTP_REFERER'];
            $Token = md5(uniqid(rand(), true));

            setcookie("wp_la_token", $Token, time() + 86400 , "/", ".churchfuel.com");               // 86400 = 1 day
            //setcookie("User_detail", $user_detail, time() + 86400, ".churchfuel.com");    // 86400 = 1 day
            database_conn($Token, $user);
            la_flag($url);
}

add_action('wp_login','cookie_auth', 10, 2 );



function logout_auth(){      
    unset( $_COOKIE['wp_la_token'] );                                              //Delete Cookie
    setcookie("wp_la_token","",time() -360000, "/", ".churchfuel.com");


}
add_action('wp_logout','logout_auth');                                       // action work on when user logged out