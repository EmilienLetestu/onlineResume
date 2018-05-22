<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 22/05/2018
 * Time: 11:10
 */

class UpdateProjectHandler
{
    /**
     * @return bool
     */
    private function isSubmitted() :bool
    {
        $name  = $_POST['projectName']  ?? null;
        $pitch = $_POST['projectPitch'] ?? null;
        $tech  = $_POST['projectTech']  ?? null;
        $pict  = $_FILES['projectPict'] ?? null;

        return $name !== null && $pitch !== null && $tech !== null && $pict !== null && !$pict['error'];

    }


    public function handle(Project $project, int $id) :true
    {
        $validator = new ProjectValidator();

        if($this->isSubmitted() && $validator->isValid())
        {
            $project->setName($_POST['projectName']);
            $project->setPitch($_POST['projectPitch']);
            $project->setTech($_POST['projectTech']);
            $project->setUrl($_POST['projectUrl']);

            if(!strpos($_FILES['projectPict']['name'],'_project'))
            {
                RenameAndSaveHelper::saveProjectPicture('projectPict', $project);
            }

            if($project->getName() !== $_POST['originalName'])
            {
                rename(PICT_DIR.$_POST['originalName'].'_projectPict',PICT_DIR.$project->getName().'projectPict');
            }

            $manager = new ProjectManager();

            $manager->updateProject($project, $id);

            return true;
        }

        return false;
    }
}