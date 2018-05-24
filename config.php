<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 23/04/2018
 * Time: 14:32
 *
 * configuration file is based on "littleblackman" config for simple MVC and FULL PHH OPP project
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
        define('HANDLER', ROOT.'formHandler/');
        define('VALIDATOR', ROOT.'validator/');
        define('SERVICE', ROOT.'service/');

        define('ASSETS', HOST.'assets/');
        define('PICT_DIR',ROOT.'assets/pictures/');
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
            case file_exists(HANDLER.$class.'.php');
                include_once (HANDLER.$class.'.php');
                break
            ;
            case file_exists(VALIDATOR.$class.'.php');
                include_once (VALIDATOR.$class.'.php');
                break
            ;
            case file_exists(SERVICE.$class.'.php');
                include_once (SERVICE.$class.'.php');
                break
            ;
        }
    }

}


