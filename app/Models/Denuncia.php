<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Denuncia
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $tipoDenuncia
 * @property $rutDenunciante
 * @property $denunciado
 * @property $direccionDenuncia
 * @property $motivo
 * @property $estado
 * @property $file
 * @property $autorizacion
 * @property Denunciante $denunciante
 * @property Respuesta[] $respuestas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Denuncia extends Model
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
    protected $fillable = ['tipoDenuncia','rutDenunciante','denunciado','direccionDenuncia','motivo','estado','file','autorizacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function denunciante()
    {
        return $this->hasOne('App\Models\Denunciante', 'rutDenunciante', 'rutDenunciante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respuestas()
    {
        return $this->hasMany('App\Models\Respuesta', 'idDenuncia', 'id');
    }


    public function denuncias()
    {
        return $this->belongsTo(Denunciante
             ::class);
    }
}
