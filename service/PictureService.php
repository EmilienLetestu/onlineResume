<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 24/05/2018
 * Time: 15:47
 */

class PictureService
{
    /**
     * rename, hydrate pictRef property and save uploaded picture into appropriate folder
     *
     * @param string $fileName
     * @param Project $project
     */
    public function saveProjectPicture(string $fileName, Project $project)
    {
        $ext = pathinfo($_FILES[$fileName]['name'], PATHINFO_EXTENSION);

        $project->setPictRef($project->getName().'_project.'.$ext);

        move_uploaded_file($_FILES[$fileName]['tmp_name'], PICT_DIR.$project->getPictRef());
    }

    /**
     * rename an existing file and hydrate pictRef property
     *
     * @param string $formerName
     * @param Project $project
     */
    public function renameProjectPicture(string $formerName, Project $project)
    {
        $suffix = explode('.',$_POST[$formerName]);
        rename(
            PICT_DIR.$_POST[$formerName],
            PICT_DIR.$project->getName().'_project.'.$suffix[1]
        );

        $project->setPictRef($project->getName().'_project.'.$suffix[1]);
    }
}