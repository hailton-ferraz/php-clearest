<?php
namespace CleaRest\Validation\Rules;


use CleaRest\Validation\ValidationRule;

/**
 * Checks if value is smaller than or equals to given value. Example of usage:
 * @validate $parameter <= 10
 */
class SmallerThanOrEquals implements ValidationRule
{
    /**
     * @param mixed $value
     * @param mixed[] $args
     * @return bool
     */
    public function validate($value, array $args)
    {
        return $value <= $args[0];
    }

    /**
     * @param mixed $value
     * @param mixed[] $args
     * @return string
     */
    public function getErrorMessage($value, array $args)
    {
        return "Given value is not smaller than or equals to $args[0]";
    }
}
