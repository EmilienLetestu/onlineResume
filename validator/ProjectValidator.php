<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 20/05/2018
 * Time: 23:08
 */

class ProjectValidator extends FormValidator
{
    /**
     * @return bool
     */
    public function isValid() :bool
    {
        $name    = $_POST['projectName'];
        $pitch   = $_POST['projectPitch'];
        $tech    = $_POST['projectTech'];
        $url     = $_POST['projectUrl'];


        $validationGroup = [
            $this->checkLength($name, 3, 50),
            $this->checkLength($tech, 3, 250),
            $this->checkTextLength($pitch, 10, 40),
            $url !== null ?? $this->checkLength($url, 10, 50),

        ];

        return $this->validate($validationGroup);
    }
}
