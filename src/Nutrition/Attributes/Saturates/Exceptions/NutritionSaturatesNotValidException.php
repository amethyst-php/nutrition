<?php

namespace Railken\LaraOre\Nutrition\Attributes\Saturates\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionSaturatesNotValidException extends NutritionAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'saturates';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_SATURATES_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
