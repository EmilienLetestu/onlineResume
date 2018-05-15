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
     * to render a view add a template name and the data to render
     *
     * @param string $template
     * @param array
     */
    public function render(string $template, array $data=null)
    {
        ob_start();

        include(VIEW.$template.'.php');

        $content = ob_get_clean();

        include_once(VIEW.'base.php');

    }
}
