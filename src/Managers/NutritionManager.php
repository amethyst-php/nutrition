<?php

namespace Railken\Amethyst\Managers;

use Illuminate\Support\Facades\Config;
use Railken\Lem\Manager;

class NutritionManager extends Manager
{
    /**
     * Describe this manager.
     *
     * @var string
     */
    public $comment = '...';

    /**
     * Register Classes.
     */
    public function registerClasses()
    {
        return Config::get('amethyst.nutrition.managers.nutrition');
    }
}