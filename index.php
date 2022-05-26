<?php
session_start();
require_once "../automated-articles/library/functions/CallAPI.php";

$access_token ="EAAo4ZC0ZBHudoBAJZAAEGgpwJtusj7HLBvAoVpi1E9fFqCEQmKZANvaVxuByleZBLE3vUvtf2GBzVJBaujn4maP8GPMkoi2ZCLMtqyMdlE4moqto1XJhJ19wjZB2XjEZBZBZBF3NdcKQIVdI7tKUUvTG3Cs2iJZAx7ZC6zZBmxJ9UZAIZA63WYBIPo5ZApK8";
$client_id = "";
$client_secret = "17841400008460056";
$fb_page_name = "Dumyard2";
function get_user_pages($page_name, $access_token) {
    // Get the User's Pages
    $get_user_pages = CallAPI("GET", "https://graph.facebook.com/v14.0/me/accounts?access_token=$access_token");
    $get_user_pages = $get_user_pages['data'];
    foreach($get_user_pages as $page) {
        // Match the page with the page needed
        if ($page['name'] == $fb_page_name) {
            return $page['id'];
        }
    }
    return FALSE;
}

// Get the Page's Instagram Business Account that's connected to the Facebook Page.
function get_instagram_user_id(){

}

$page_id = get_user_pages($fb_page_name, $access_token);
exit;

$pageid = "17841400008460056";
$page_id = "";

$image_url = "https://nixby.in/wp-content/uploads/igtest.jpg";
$caption = "%23HelloTest";
// upload media and create media containers

$container = "https://graph.facebook.com/v14.0/" . $pageid . "/media?image_url=" . $image_url ."&caption=" . $caption; 
$get_ig_container_id = CallAPI("POST", $container);

var_dump($get_ig_container_id);

$_SESSION['id'] = $get_ig_container_id['id'];

//  publish uploaded media using their media containers.