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
     * @param Skill $skill
     * @return bool
     */
    public function handle(Skill $skill):bool
    {
        $validator = new AddSkillValidator();

        if($this->isSubmitted() && $validator->isValid()){

            $skill->setName($_POST['skillName']);
            $skill->setLevel($_POST['skillLevel']);

            $skillManager = new SkillManager();
            $skillManager->addSkill($skill);

            return true;
        }

        return false;
    }
}