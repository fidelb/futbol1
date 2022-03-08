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
 * @property partitsComLocal $partit
 * @property partitsComVisitant $partit
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equip extends Model
{
    private $partits;

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

    public function partitsComLocal()
    {
        return $this->hasMany('App\Models\Partit', 'equipLocal_id', 'id');
    }

    public function partitsComVisitant()
    {
        return $this->hasMany('App\Models\Partit', 'equipVisitant_id', 'id');
    }

    public function partitsJugats()
    {
        //obtenir tots els partits jugats com a local o visitants
        //ordenats per data DESC
        $partitsL = $this->partitsComLocal;
        $partitsV = $this->partitsComVisitant;
        $merged = $partitsL->merge($partitsV);
        return $merged->sortByDesc('data');
    }

    public function jugadors()
    {
        return $this->hasMany('App\Models\Jugador', 'equip_id', 'id');
    }



}
