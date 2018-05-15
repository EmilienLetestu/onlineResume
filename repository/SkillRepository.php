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
     * get all the skills stored into db
     *
     * @return array
     */
    public function getAllSkills() :?array
    {
        $pdo = $this->getPdo();
        $request = $pdo->prepare('SELECT * FROM skill');
        $request->execute();


        $results = [];

        while ($row = $request->fetch(PDO::FETCH_ASSOC)){

           $skill = new Skill();
           $skill->setName($row['name']);
           $skill->setLevel($row['level']);
           $results[] = $skill;
       }

        return $results;
    }

    /**
     * fetch a given skill based on its id
     *
     * @param int $id
     * @return null|Skill
     */
    public function getSkillById(int $id) :?Skill
    {
        $pdo = $this->getPdo();
        $query = 'SELECT * FROM skill WHERE id = :id';
        $request = $pdo->prepare($query);
        $request->bindValue(':id', $id);
        $request->execute();

        $row = $request->fetch(PDO::FETCH_ASSOC);

        $skill = new Skill();
        $skill->setName($row['name']);
        $skill->setLevel($row['level']);

        return $skill;
    }
}
