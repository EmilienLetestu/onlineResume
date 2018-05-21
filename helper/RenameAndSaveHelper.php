<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 21/05/2018
 * Time: 11:14
 */

class RenameAndSaveHelper
{
    /**
     * rename, hydrate pictRef property and save uploaded picture into appropriate folder
     *
     * @param string $fileName
     * @param Project $project
     */
    public static function saveProjectPicture(string $fileName, Project $project)
    {
        $ext = pathinfo($_FILES[$fileName]['name'], PATHINFO_EXTENSION);

        $project->setPictRef($project->getName().'_project.'.$ext);

        move_uploaded_file($_FILES[$fileName]['tmp_name'], PICT_DIR.$project->getPictRef());
    }
}