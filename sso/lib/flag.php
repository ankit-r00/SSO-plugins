<?php

/**
 * flag.php
 * plugin main file
 * @package Plugins/Lib
 * @version 1.0
 */

function la_flag($url){
    $link_array = explode('?',$url);
    $flag = end($link_array);
    if ($flag == "twopage"){
        wp_redirect( 'http://staging3.twopageplan.churchfuel.com/', 302 ); exit;
    }
}
