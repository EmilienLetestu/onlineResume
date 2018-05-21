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
        $pict    = $_FILES['projectPict']['name'];


        $validationGroup = [
            $this->checkLength($name, 3, 50),
            $this->checkLength($tech, 3, 250),
            $this->checkTextLength($pitch, 10, 40),
            $url !== null ?? $this->checkLength($url, 10, 50),
            $this->checkFileExtension(
                $pict,
                ['jpg', 'jpeg', 'png', 'gif']
            ),
            $this->checkFileSize(
                $_FILES['projectPict']['size'],
                5000000
            )

        ];

        return $this->validate($validationGroup);
    }
}
