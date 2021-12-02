<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Respuesta
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $idDenuncia
 * @property $correoFuncionario
 * @property $respuesta
 *
 * @property Denuncia $denuncia
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Respuesta extends Model
{
    
    static $rules = [
		'idDenuncia' => 'required',
		'correoFuncionario' => 'required',
		'respuesta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idDenuncia','correoFuncionario','respuesta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function denuncia()
    {
        return $this->hasOne('App\Models\Denuncia', 'id', 'idDenuncia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'email', 'correoFuncionario');
    }
    

}
