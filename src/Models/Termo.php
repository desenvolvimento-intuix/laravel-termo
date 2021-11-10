<?php

namespace Intuix\Termo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Termo extends Model
{

    use SoftDeletes;
    
    public $table = 'termos';
    
    protected $fillable = ['slug', 'titulo', 'texto'];

    public function aceites()
    {
        return $this->hasMany('Intuix\Termo\Models\TermoAceite');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'cliente_id', 'clie_id_cliente');
    }

}

