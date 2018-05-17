<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 17/05/2018
 * Time: 18:11
 */

class UpdateSkillHandler
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
     * @param Skill $skill
     * @param int $id
     * @return bool
     */
    public function handle(Skill $skill, int $id):bool
    {
        $validator = new AddSkillValidator();

        if($this->isSubmitted() && $validator->isValid()){

            $skill->setName($_POST['skillName']);
            $skill->setLevel($_POST['skillLevel']);

            $skillManager = new SkillManager();
            $skillManager->updateSkill($skill,$id);

            return true;
        }

        return false;
    }
}