<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 21/05/2018
 * Time: 09:19
 */

class ProjectListController
{
    public function __invoke()
    {
        $view = new View();
        $projectList = new ProjectRepository();

        $view->render('adminProjectList',[
            'title'       => 'Mes projets',
            'projectList' => $projectList->getAllProjects()
        ]);
    }
}