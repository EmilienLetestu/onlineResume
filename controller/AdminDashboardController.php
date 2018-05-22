<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 22/05/2018
 * Time: 12:23
 */

class AdminDashboardController
{
    public function __invoke()
    {
        $view      = new View();
        $skillRepository = new SkillRepository();
        $projectRepository = new ProjectRepository();

        $view->render('adminDashboard',[
            'skillList' => $skillRepository->getAllSkills(),
            'projectList' => $projectRepository->getAllProjects()
        ]);
    }
}