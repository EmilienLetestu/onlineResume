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
        $name  = $_POST['skillName']  ?? null;
        $level = $_POST['skillLevel'] ?? null;

        return $level !== null && $name !== null;
    }


    /**
     * process submitted data and store them into db
     *
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
