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
}
