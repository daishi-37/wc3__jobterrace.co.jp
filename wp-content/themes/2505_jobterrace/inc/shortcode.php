<?php

//-----------------------------------------------------------------------------------//
// サインアップ欄
//-----------------------------------------------------------------------------------//
// function myshort_slider2_func() {
    
// }
// add_shortcode('myshort_slider2', 'myshort_slider2_func');
/**
 * ----------------------------------------------------------------------------------------
 * Shortcode home url
 * [home_url]
 * ----------------------------------------------------------------------------------------
 */
if (!function_exists('fl_home_url_function')) {
    function fl_home_url_function() {
        return get_bloginfo( "url" );
    }
    add_shortcode('home_url', 'fl_home_url_function');
}