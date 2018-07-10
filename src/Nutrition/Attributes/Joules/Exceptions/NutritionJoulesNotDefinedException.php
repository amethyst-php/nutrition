<?php

namespace Railken\LaraOre\Nutrition\Attributes\Joules\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionJoulesNotDefinedException extends NutritionAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'joules';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_JOULES_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}