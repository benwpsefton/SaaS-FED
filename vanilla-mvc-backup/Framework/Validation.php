<?php

/**
 * Validation Class
 *
 * Validates provided values to relevant requirements
 *
 * Filename:        Validation.php
 * Location:
 * Project:         vanilla-mvc
 * Date Created:    20/04/2025
 *
 * Author:          ben sefton
 *
 */

namespace Framework;

class Validation
{
    /**
     * Checks to see if the provided value is a string, then checks length
     *
     * @param $value
     * @param $min
     * @param $max
     * @return bool
     */
    public static function string($value, $min = 1, $max = INF)
    {
        if (is_string($value)) {
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max;
        }

        return false;
    }
    /**
     * Uses filter_var function to validate the structure of the email address
     *
     * @param $value
     * @return mixed
     */
    public static function email($value)
    {
        $value = trim($value);

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * This ensures that the two values given are the same type and the same value
     * This means that 123 and "123" will give FALSE as they are different types
     *
     * @param $value1
     * @param $value2
     * @return bool
     */
    public static function match($value1, $value2)
    {
        $value1 = trim($value1);
        $value = trim($value2);

        return $value1 === $value2;
    }
}