<?php 
/**
 * 
 * 
 * @package MouadhPlugin
 * 
 */
class MouadhPluginActivate{

    public static function activate(){
        echo'test test plugin';
		
		

        flush_rewrite_rules();
    }



}
