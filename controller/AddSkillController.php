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
        $skill = new Skill();
        $skillHandler =  new AddSkillHandler();

        if($skillHandler->handle($skill)){

            return  Redirection::redirect('admin');

        }

        return Redirection::redirect('admin');
    }
}