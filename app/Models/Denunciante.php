<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Denunciante
 *
 * @property $created_at
 * @property $updated_at
 * @property $rutDenunciante
 * @property $nombreDenunciante
 * @property $direccionDenunciante
 * @property $celularDenunciante
 * @property $correoDenunciante
 *
 * @property Denuncia[] $denuncias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Denunciante extends Model
{
    
    static $rules = [
		'rutDenunciante' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rutDenunciante','nombreDenunciante','direccionDenunciante','celularDenunciante','correoDenunciante'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denuncias()
    {
        return $this->hasMany('App\Models\Denuncia', 'rutDenunciante', 'rutDenunciante');
    }
    

}
