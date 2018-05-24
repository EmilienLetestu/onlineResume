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
        $name  = $_POST['editName']  ?? null;
        $pitch = $_POST['editPitch'] ?? null;
        $tech  = $_POST['editTech']  ?? null;

        return $name !== null && $pitch !== null && $tech !== null;

    }


    public function handle(Project $project, int $id) :bool
    {
        $validator = new updateProjectValidator();

        if($this->isSubmitted() && $validator->isValid())
        {
            $project->setName($_POST['editName']);
            $project->setPitch($_POST['editPitch']);
            $project->setTech($_POST['editTech']);
            $project->setUrl($_POST['editUrl']);


            $manager = new ProjectManager();


            if($_FILES['editPict']['size'] !== 0 && !strpos($_FILES['editPict']['name'],'_project'))
            {
                unlink(PICT_DIR.$_POST['originalPict']);

                $picture = new PictureService();
                $picture->saveProjectPicture('editPict', $project);
                $manager->updateProject($project, $id);

                return true;
            }

            if ($_FILES['editPict']['size'] === 0 && $project->getName() !== $_POST['originalName'])
            {
                $picture = new PictureService();

                $picture->renameProjectPicture('originalPict', $project);
                $manager->updateProject($project, $id);

                return true;
            }

            $project->setPictRef($_POST['originalPict']);
            $manager->updateProject($project, $id);

            return true;
        }

        return false;
    }
}