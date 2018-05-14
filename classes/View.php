<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 14/05/2018
 * Time: 13:46
 */

class View
{
    /**
     * @var
     */
    private $template;

    /**
     * View constructor.
     * @param $template
     */
    public function __construct($template)
    {
        $this->template = $template;
    }

    /**
     * @param array $data
     */
    public function render(array $data)
    {
        $template = $this->template;

        ob_start();

        include(VIEW.$template.'.php');

        $content = ob_get_clean();

        include_once(VIEW.'base.php');

    }
}
