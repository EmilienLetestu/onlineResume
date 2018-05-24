<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 22/05/2018
 * Time: 13:01
 */

class EditProjectController
{
    public function __invoke()
    {
       $request = explode('/',$_SERVER['REQUEST_URI']);
       $view = new View();
       $repository = new ProjectRepository();

       $view->render('editProject',[
           'project' => $repository->getProjectById(end($request))
       ]);
    }
}