<?php 
/**
 * Trigger File to unistall plugin
 * 
 * 
 * @package MouadhPlugin
 * 
 */
//security check 

if(! defined('WP_UNInSTALL_PLUGIN')){
    die;

}
//clear database store data if user delete th plugin :
    //First methode
$Books = get_posts(array('post_type'=>'Book','numberposts'=>-1));

foreach($Books as $Book){
    wp_delete_post($Book->ID,TRUE);
}
//Second methode 
//Acces to db via SQL 
/*global $wpdb;
$wpdb->query("DELETE *  FROM wp_posts WHERE post_type ='book'");*/



?>