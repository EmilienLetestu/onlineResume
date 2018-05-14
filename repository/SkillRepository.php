<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 14/05/2018
 * Time: 11:09
 */

class SkillRepository extends Bdd
{

    /**
     * @return array
     */
    public function getAllSkills() :?array
    {
        $pdo = $this->getPdo();
        $request = $pdo->prepare('SELECT * FROM skill');
        $request->execute();


        $result = $request->fetchAll();

        $results = [];

        foreach ($result as $data)
        {
            $results[] = [
                'id'    => $data['id'],
                'name'  => $data['name'],
                'level' => $data['level']
            ];
        }

        return $results;
    }

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
