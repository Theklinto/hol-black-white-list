<?php
/**
* @package hol-bwlist
*
*Plugin Name:    HardwareOnline B/W list helper
*Description:    Designed to grab all posts from black/white lists from HardwareOnline.dk and provide a user rating interface.
*Version:        1.0
*Author:         Marius Klint Hansen | TheKlinto
*Text Domain:    hol-black-white-list
*Author URI:     https://github.com/Theklinto
*/

//Included Menus
include_once('menus/hol-bwlist-admin-menu.php');

//Included models
include_once('models/hol-bwlist-user.php');
include_once('models/hol-bwlist-post.php');
include_once("models/hol_bwlist_user_repo");
use Hol_bwlist_user as Hol_User;
use Hol_bwlist_post as Hol_Post;
use Hol_bwlist_user_repo as Hol_user_repo;

//Included Helpers
include_once('helpers/hol-bwlist-logger.php');
use Hol_bwlist_logger as Logger;

//Globals
$hol_bwlist_url = 'https://www.hardwareonline.dk/koebsalg.aspx?fid=11&tid=915294';


$user = new Hol_User("Guncityy", "Bruger");
$repo = new Hol_user_repo();
$repo->GetAllUsers();