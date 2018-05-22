<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 22/05/2018
 * Time: 10:27
 */

class DeleteProjectController
{
    public function __invoke()
    {
       $request = explode('/', $_SERVER['REQUEST_URI']);

       $manager = new ProjectManager();

       array_map('unlink', glob(PICT_DIR.end($request).'_project.*'));

       $manager->deleteProjectByName(end($request));

       return Redirection::redirect('project-list');
    }
}