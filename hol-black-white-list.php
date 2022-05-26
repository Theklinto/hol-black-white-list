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
use Hol_bwlist_user as User;
use Hol_bwlist_post as Post;

//Included Helpers
include_once('helpers/hol-bwlist-logger.php');
use Hol_bwlist_logger as Logger;

//Globals
$hol_bwlist_url = 'https://www.hardwareonline.dk/koebsalg.aspx?fid=11&tid=915294';

add_action('admin_menu', 'test_log', 99);

function test_log()
{
    $logger = new Logger();
    $logger->log('Titel');
}
