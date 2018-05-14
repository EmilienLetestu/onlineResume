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
     * @param string $name
     * @param int $level
     */
    public function addSkill(string $name, int $level)
    {
        $pdo = $this->getPdo();

        $request = $pdo->prepare(
            'INSERT INTO skill(name, level) VALUES(:name, :level)'
        );

        $request->execute([
            'name'  => $name,
            'level' => $level
        ]);
    }
}