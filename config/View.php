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
     * @param string $template
     * @param array|null $data
     */
    public function render(string $template, ?array $data)
    {
        ob_start();

        include(VIEW.$template.'.php');

        $content = ob_get_clean();

        include_once(VIEW.'base.php');

    }
}
