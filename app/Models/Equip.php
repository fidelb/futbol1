<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equip
 *
 * @property $id
 * @property $equip
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equip extends Model
{
    
    static $rules = [
		'equip' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equip'];



}
