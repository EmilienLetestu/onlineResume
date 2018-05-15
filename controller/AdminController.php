<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 21:53
 */

class AdminController
{
    public function __invoke()
    {
        $view      = new View();
        $skillList = new SkillRepository();

        $view->render('admin',[
            'skillList' => $skillList->getAllSkills()
        ]);
    }
}