<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 22:10
 */

class DeleteSkillController
{
    public function __invoke()
    {
       $request = explode('/',$_SERVER['REQUEST_URI']);

       $manager = new SkillManager();

       $manager->deleteSkillById(end($request));

       return Redirection::redirect('admin');

    }
}