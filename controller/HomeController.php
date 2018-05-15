<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 14/05/2018
 * Time: 16:53
 */

class HomeController
{

    public function __invoke()
    {
        $view      = new View();
        $skillList = new SkillRepository();
        

        $view->render( 'home',$data = [
            'title'    => 'dssdqsdsqd',
            'subtitle' => 'AAAAAAA',
            'skillList'=> $skillList->getAllSkills()
        ]);
    }
}