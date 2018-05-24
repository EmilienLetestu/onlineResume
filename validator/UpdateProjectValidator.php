<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 24/05/2018
 * Time: 13:28
 */

class updateProjectValidator extends  FormValidator
{
    /**
     * @return bool
     */
    public function isValid() :bool
    {
        $name    = $_POST['editName'];
        $pitch   = $_POST['editPitch'];
        $tech    = $_POST['editTech'];
        $url     = $_POST['editUrl'];
        $pict    = $_FILES['editPict'];



        $validationGroup = [
            $this->checkLength($name, 3, 50),
            $this->checkLength($tech, 3, 250),
            $this->checkTextLength($pitch, 10, 40),
            $url  !== null ?? $this->checkLength($url, 10, 50),
            $pict['name'] !== " " ?? $this->checkFileExtension(
                $pict['name'],
                ['jpg', 'jpeg', 'png', 'gif']
            ),
            $pict['name'] !== " " ?? $this->checkFileSize(
                $pict['size'],
                5000000
            )
        ];

        return $this->validate($validationGroup);
    }
}