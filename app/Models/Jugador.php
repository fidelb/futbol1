<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jugador
 *
 * @property $id
 * @property $nom
 * @property $equip_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Equip $equip
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Jugador extends Model
{
    
    static $rules = [
		'nom' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','equip_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equip()
    {
        return $this->hasOne('App\Models\Equip', 'id', 'equip_id');
    }
    

}
