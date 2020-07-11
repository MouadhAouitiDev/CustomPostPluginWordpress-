<?php 
/**
 * 
 * 
 * @package MouadhPlugin
 * 
 */
class MouadhPluginDeactivate{

    public static function deactivate(){

        flush_rewrite_rules();
    }



}