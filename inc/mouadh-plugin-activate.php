<?php 
/**
 * 
 * 
 * @package MouadhPlugin
 * 
 */
class MouadhPluginActivate{

    public static function activate(){
        echo'test manel plugin';
		
		

        flush_rewrite_rules();
    }



}