<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partit
 *
 * @property $id
 * @property $data
 * @property $equipLocal_id
 * @property $equipVisitant_id
 * @property $golsLocal
 * @property $golsVisitant
 * @property $created_at
 * @property $updated_at
 *
 * @property EquipLocal $equip
 * @property EquipVisitant $equip
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Partit extends Model
{
    
    static $rules = [		
		'golsLocal' => 'required',
		'golsVisitant' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['data','equipLocal_id','equipVisitant_id','golsLocal','golsVisitant'];

    public function equipLocal()
    {
        return $this->hasOne('App\Models\Equip', 'id', 'equipLocal_id');
    }
    
    public function equipVisitant()
    {
        return $this->hasOne('App\Models\Equip', 'id', 'equipVisitant_id');
    }

}
