<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ciclos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'periodo', 'status',
    ];

    /**
     * The attributes that should be mutated to dates.
     * HasAttributes
     * https://laravel.com/api/5.7/Illuminate/Database/Eloquent/Concerns/HasAttributes.html
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     * HasAttributes
     * https://laravel.com/api/5.7/Illuminate/Database/Eloquent/Concerns/HasAttributes.html
     *
     * @var array
     */
    protected $casts = [
        'status'   => 'boolean'
    ];
}
