<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 14:29
 */

class AddSkillValidator extends FormValidator
{
    /**
     * check if submitted data from add skill from are valid
     *
     * @return bool
     */
    public function isValid() :bool
    {
           $name  = $_POST['skillName'];
           $level = $_POST['skillLevel'];

            $validationGroup = [
                $this->checkType($name,'string'),
                $this->checkType(intval($level), 'integer'),
                $this->checkLength($name,2,30),
                $this->checkRange(intval($level), 50, 100)
            ];

            return $this->validate($validationGroup);
    }
}