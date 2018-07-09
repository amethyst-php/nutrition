<?php

namespace Railken\LaraOre\Nutrition\Attributes\Fibre\Exceptions;

use Railken\LaraOre\Nutrition\Exceptions\NutritionAttributeException;

class NutritionFibreNotValidException extends NutritionAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'fibre';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NUTRITION_FIBRE_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
