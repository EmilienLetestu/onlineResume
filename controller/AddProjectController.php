<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 21/05/2018
 * Time: 09:58
 */

class AddProjectController
{
    public function __invoke()
    {
        $project = new Project();
        $handler = new AddProjectHandler();


        if($handler->handle($project))
        {
            return Redirection::redirect('project-list');
        }

        return Redirection::redirect('project-list');
    }
}