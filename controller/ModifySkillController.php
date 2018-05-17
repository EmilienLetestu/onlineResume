<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 22:43
 */

class ModifySkillController
{
    public function __invoke()
    {
        $request = explode('/',$_SERVER['REQUEST_URI']);

        $handler = new UpdateSkillHandler();
        $skill   = new Skill();

        if($handler->handle($skill, end($request))){

            return  Redirection::redirect('admin');
        }

        return  Redirection::redirect('home');
    }
}