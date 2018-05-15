<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 12:46
 */

class AddSkillHandler
{

    /**
     * @return bool
     */
    private function isSubmitted() :bool
    {
        $name  = isset($_POST['skillName'])  ? $_POST['skillName'] : null;
        $level = isset($_POST['skillLevel']) ? $_POST['skillLevel'] : null;

        return $level !== null && $name !== null;
    }

    /**
     * @return bool
     */
    private function isValid() :bool
    {
        if($this->isSubmitted()){

            $name  = $_POST['skillName'];
            $level = $_POST['skillLevel'];

            $validator = new FormValidator();

            $validationGroup = [
                $validator->checkType($name,'string'),
                $validator->checkType(intval($level), 'integer'),
                $validator->checkLength($name,2,30),
                $validator->checkRange(intval($level), 50, 100)
            ];

            return $validator->validate($validationGroup);
        }

        return false;
    }

    /**
     * @param Skill $skill
     * @return bool
     */
    public function handle(Skill $skill):bool
    {
        if($this->isSubmitted() && $this->isValid()){

            $skill->setName($_POST['skillName']);
            $skill->setLevel($_POST['skillLevel']);

            $skillManager = new SkillManager();
            $skillManager->addSkill($skill);

            return true;
        }

        return false;
    }
}