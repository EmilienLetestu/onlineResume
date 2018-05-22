<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 20/05/2018
 * Time: 22:42
 */

class ProjectRepository extends Bdd
{

    /**
     * Fetch all projects from table
     *
     * @return array
     */
    public function getAllProjects() :?array
    {
        $pdo = $this->getPdo();

        $request = $pdo->prepare('SELECT * FROM project');
        $request->execute();

        $results = [];

        while ($row = $request->fetch(PDO::FETCH_ASSOC)){

            $project = new Project();
            $project->setId($row['id']);
            $project->setName($row['name']);
            $project->setPictRef($row['pict_ref']);
            $project->setPitch($row['pitch']);
            $project->setUrl($row['url']);
            $project->setTech($row['tech']);
            $results[] = $project;

        }

        return $results;
    }

    /**
     * @param int $id
     * @return null|Project
     */
    public function getProjectById(int $id) :?Project
    {
        $pdo = $this->getPdo();

        $request = $pdo->prepare('SELECT * FROM prooject WHERE id = :id');
        $request->bindValue(':id', $id);
        $request->execute();

        $row = $request->fetch(PDO::FETCH_ASSOC);

        $project = new Project();

        $project->setId($row['id']);
        $project->setName($row['name']);
        $project->setPictRef($row['pictRef']);
        $project->setUrl($row['url']);
        $project->setTech($row['tech']);
        $project->setPitch($row['pitch']);

        return $project;
    }
}
