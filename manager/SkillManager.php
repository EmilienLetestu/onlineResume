<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 14/05/2018
 * Time: 16:48
 */

class SkillManager extends Bdd
{
    /**
     * add a new skill to db
     *
     * @param Skill $skill
     */
    public function addSkill(Skill $skill)
    {
        $pdo = $this->getPdo();

        $request = $pdo->prepare(
            'INSERT INTO skill(name, level) VALUES(:name, :level)'
        );

        $request->execute([
            'name'  => $skill->getName(),
            'level' => $skill->getLevel()
        ]);
    }

    /**
     * @param int $id
     */
    public function deleteSkillById(int $id)
    {
        $pdo = $this->getPdo();
        $request = $pdo->prepare(
            'DELETE FROM skill WHERE id = :id '
        );
        $request->bindValue(':id', $id);
        $request->execute();
    }
}
