<?php

namespace Railken\LaraOre\Nutrition\Attributes\Salt\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionSaltNotValidException extends NutritionAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'salt';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_SALT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
