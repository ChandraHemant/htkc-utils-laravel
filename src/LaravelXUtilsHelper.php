<?php

namespace ChandraHemant\HtkcUtilsLaravel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class: LaravelXUtilsHelper
 * Author: Hemant Kumar Chandra
 * Category: Helpers
 *
 * This class provides helper methods for retrieving data from a database table with the option to join multiple tables.
 */

class LaravelXUtilsHelper
{
    public static function getModelData(Model $eloquentModel, array $column)
    {
        $query = $eloquentModel->query();
    }
    

}