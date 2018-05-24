<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 14/05/2018
 * Time: 12:11
 */

class Router
{
    //todo : routing system has to be more flexible => has to be redesigned before prod version !!!

    /**
     * declare all your routes and associated controllers here
     *
     * @var array
     */
    private $routes = [
        "home"                 => ["controller" => "HomeController"],
        "add-skill"            => ["controller" => "AddSkillController"],
        "dashboard"            => ["controller" => "AdminDashboardController"],
        "modify-skill"         => ["controller" => "ModifySkillController"],
        "delete-skill"         => ["controller" => "DeleteSkillController"],
        "add-project"          => ["controller" => "AddProjectController"],
        "edit-project"         => ["controller" => "EditProjectController"],
        "update-project"       => ["controller" => "UpdateProjectController"],
        "delete-project"       => ["controller" => "DeleteProjectController"]
    ];

    /**
     * get last part from url and use it later on to get a matching route
     *
     * @return string
     */
    private function getRequest():string
    {
        $request = $_SERVER['REQUEST_URI'];
        $route   = explode('/',$request);

        return $route[2];
    }

    /**
     * for a given route get its matching controller and execute its method
     *
     * @param string $requestedRoute
     * @return mixed
     */
    private function getMatchingRoute(string $requestedRoute)
    {
        $guessController = $this->routes[$requestedRoute]['controller'];
        $controller    = new $guessController;

        return $controller->__invoke();

    }



    /**
     * for a given route get its matching controller
     */
    public function renderController()
    {
        $requestedRoute = $this->getRequest();

        switch ($requestedRoute):

            case key_exists($requestedRoute, $this->routes):
                $this->getMatchingRoute($requestedRoute);
                break;

            default:
                echo "404";

        endswitch;
    }
}