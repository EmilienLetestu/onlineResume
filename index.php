<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 23/04/2018
 * Time: 14:29
 */
include_once('config.php');

appAutoload::start();


$routeur = new Router();
$routeur->renderController();

