<?php
/**
 * @description:自动加载类
 * @author:henry
 * @create:2016年03月10日14:21:16
 */

class autoload{
     public static function load( $fileName ){
                        $filePath = sprintf( '%s.php',str_replace( '\\','/',$fileName ) );
                        if( is_file( $filePath) ) require_once $filePath;
                   }
}
spl_autoload_register( [ 'autoload' ,'load'] );
