<?php

/**
 * database.php
 * plugin main file
 * @package Plugins/Lib
 * @version 1.0
 */

function database_conn($Token, $user){

    $mydb = new wpdb("laravel", "YFpNeimLGihdpWNPL", "laravelDB", "localhost");

    $results = $mydb->get_results("SELECT id FROM users WHERE id = $user->ID");
    $current_date = date("Y/m/d_h:i:sa");

    $mydb->get_results("Insert into tokens ( id, wp_token, user_id, created_at)  VALUES ( '', '$Token', $user->ID, '$current_date' )");

    if ($results){

        $mydb->get_results("UPDATE users SET first_name = '$user->user_firstname', last_name = '$user->user_lastname', email = '$user->user_email', updated_at = '$current_date' WHERE id = $user->ID");

    }else{

        $mydb->get_results("Insert into users (id, first_name, last_name, email, email_verified_at,	password,	remember_token,	created_at,	updated_at)  VALUES ($user->ID, '$user->user_firstname', '$user->user_lastname', '$user->user_email', NULL, '', NULL, '$current_date', NULL )");
    }

}