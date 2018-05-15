<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 13:11
 */

class FormValidator
{
    /**
     * @param $value
     * @param $assert
     * @return bool
     */
    public function checkType($value, $assert) :bool
    {
        return gettype($value) === $assert;
    }

    /**
     * @param $value
     * @param $min
     * @param $max
     * @return bool
     */
    public function checkLength(string $value, int $min, int $max) :bool
    {
        $length = strlen($value);

        return $length >= $min && $value <= $max;
    }

    /**
     * @param int $value
     * @param int $min
     * @param int $max
     * @return bool
     */
    public function checkRange(int $value, int $min, int $max) : bool
    {
        return $value >= $min && $value <= $max;
    }

    /**
     * @param array $group
     * @return bool
     */
    public function validate(array $group) :bool
    {
        return !in_array(false,$group, true);
    }
}
