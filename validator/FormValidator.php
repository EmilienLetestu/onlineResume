<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 15/05/2018
 * Time: 13:11
 *
 * A set of methods to use in form validation process
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
     * count number of word in a text and check if it match min/max
     *
     * @param string $value
     * @param int $min
     * @param int $max
     * @return bool
     */
    public function checkTextLength(string $value, int $min, int $max) :bool
    {
        $length = count(explode(' ', $value));

        return $length >= $min && $length <= $max;
    }

    /**
     * @param string $filePath
     * @param array $authorisedExtension
     * @return bool
     */
    public function checkFileExtension(string $filePath, array $authorisedExtension) :bool
    {
        return in_array(
            pathinfo($filePath, PATHINFO_EXTENSION),
            $authorisedExtension,
            true
        );
    }

    /**
     * @param int $fileSize
     * @param int $max
     * @return bool
     */
    public function checkFileSize(int $fileSize, int $max) :bool
    {
        return $fileSize <= $max;
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
