<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 21/05/2018
 * Time: 09:58
 */

class AddProjectHandler
{
    private function isSubmitted() :bool
    {
        $name  = $_POST['projectName']  ?? null;
        $pitch = $_POST['projectPitch'] ?? null;
        $tech  = $_POST['projectTech']  ?? null;
        $pict  = $_FILES['projectPict'] ?? null;

        return $name !== null && $pitch !== null && $tech !== null && $pict !== null && !$pict['error'];

    }

    /**
     * @param Project $project
     * @return bool
     */
    public function handle(Project $project)
    {
        $validator = new ProjectValidator();

        if($this->isSubmitted() && $validator->isValid())
        {
            $project->setName($_POST['projectName']);
            $project->setPitch($_POST['projectPitch']);
            $project->setTech($_POST['projectTech']);
            $project->setUrl($_POST['projectUrl']);

            RenameAndSaveHelper::savePicture('projectPict',$project);

            $projectManager = new ProjectManager();

            $projectManager->addProject($project);

            return true;

        }

        return false;
    }
}