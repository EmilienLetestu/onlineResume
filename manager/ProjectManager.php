<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 20/05/2018
 * Time: 22:56
 */

class ProjectManager extends Bdd
{
    /**
     * store a new project into db
     *
     * @param Project $project
     */
    public function addProject(Project $project)
    {
        $pdo = $this->getPdo();

        $request = $pdo->prepare(
            'INSERT INTO project(name, url, tech, pitch, pict_ref) VALUES(:name, :url, :tech, :pitch, :pict_ref)'
        );

        $request->execute([
            'name'     => $project->getName(),
            'url'      => $project->getUrl(),
            'tech'     => $project->getTech(),
            'pitch'    => $project->getPitch(),
            'pict_ref' => $project->getPictRef()
        ]);
    }

    /**
     * delete a given project from db based on its name
     *
     * @param string $name
     */
    public function deleteProjectByName(string $name)
    {
        $pdo = $this->getPdo();

        $request = $pdo->prepare(
            'DELETE FROM project WHERE name = :name'
        );

        $request->bindValue(':name', $name);
        $request->execute();
    }

    /**
     * @param Project $project
     * @param $id
     */
    public function updateProject(Project $project, $id)
    {
        $pdo = $this->getPdo();

        $request = $pdo->prepare(
            'UPDATE project SET name = :name, url = :url, tech = :tech, pitch = :pitch, pict_ref = :pict_ref WHERE id = :id'
        );

        $request->execute([
            'name'     => $project->getName(),
            'url'      => $project->getUrl(),
            'tech'     => $project->getTech(),
            'pitch'    => $project->getPitch(),
            'pict_ref' => $project->getPictRef(),
            'id'       => $id

        ]);
    }
}
