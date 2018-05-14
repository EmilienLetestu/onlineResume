<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 23/04/2018
 * Time: 14:32
 */

ini_set('display_errors','on');
error_reporting(E_ALL);


class appAutoload
{

    public static function start()
    {
        spl_autoload_register([__CLASS__ ,'autoload']);

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];


        define('HOST', 'http://'.$host.'/onlineResume/');
        define('ROOT', $root.'/onlineResume/');

        define('CONTROLLER', ROOT.'controller/');
        define('CONFIG', ROOT.'config/');
        define('MANAGER', ROOT.'manager/');
        define('REPOSITORY', ROOT.'repository/');
        define('ENTITY', ROOT.'entity/');
        define('VIEW', ROOT.'view/');

        define('ASSETS', HOST.'assets/');
    }

    /**
     * @param $class
     */
    public static function autoload($class)
    {
        switch ($class)
        {

            case file_exists(ENTITY.$class.'.php') :
                include_once (ENTITY.$class.'.php');
                break
            ;
            case file_exists(CONTROLLER.$class.'.php') :
                include_once (CONTROLLER.$class.'.php');
                break
            ;
            case file_exists(MANAGER.$class.'.php') :
                include_once (MANAGER.$class.'.php');
                break
            ;
            case file_exists(REPOSITORY.$class.'.php') :
                include_once (REPOSITORY.$class.'.php');
                break
            ;
            case file_exists(VIEW.$class.'.php') :
                include_once (VIEW.$class.'.php');
                break
            ;
            case file_exists(CONFIG.$class.'.php');
                include_once (CONFIG.$class.'.php');
                break
            ;
        }
    }

}


