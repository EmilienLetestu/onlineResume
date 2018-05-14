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
        $title = 'dssdqsdsqd';

        $view = new View('home');
        $skillList = new SkillRepository();


        $view->render( $data = [
            'title' => $title,
            'subtitle' => 'AAAAAAA',
            'skillList' => $skillList
        ]);
    }
}