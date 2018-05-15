<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 12:26
 */

class ProcessAddSkillController
{
    public function __invoke()
    {
       $skill = new Skill();
       $skillHandler =  new AddSkillHandler();

       if($skillHandler->handle($skill)){

         return  Redirection::redirect('home');

       }

       return Redirection::redirect('add-skill');
    }
}