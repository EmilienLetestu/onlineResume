<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 12:01
 */

class AddSkillController
{
    public function __invoke()
    {
        $view  = new View();
        $view->render('addSkill',null);
    }
}