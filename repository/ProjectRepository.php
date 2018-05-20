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
    public function getAllProjects()
    {
        $pdo = $this->getPdo();

        $request = $pdo->prepare('SELECT * FROM preoject');
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
}
