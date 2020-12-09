<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastaRecipe extends Model
{
    protected $fillable = [
        'recipe_name',
        'recipe_type',
        'recipe_preparation',
        'recipe_preparation_time',
        'recipe_description',
    ];
}
