<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 12:18
 */
class Redirection
{
    /**
     * redirect to a given page / controller
     *
     * @param string $path
     * @return Redirection
     */
    public static function redirect(string $path) :self
    {
        header('Location:'.HOST.$path);
    }
}