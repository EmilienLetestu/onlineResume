<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 22/05/2018
 * Time: 12:00
 */

class UpdateProjectController
{
    Public function __invoke()
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);

        $project = new Project();
        $handler = new UpdateProjectHandler();

        if($handler->handle($project, end($request)))
        {
            return Redirection::redirect('project-list');
        }

        return Redirection::redirect('project-list');
    }
}