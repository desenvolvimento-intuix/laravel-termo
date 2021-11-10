<?php

namespace Intuix\Termo\Models;

use Illuminate\Database\Eloquent\Model;

class TermoAceite extends Model
{
    
    protected $table = 'termo_aceites';

    protected $fillable = ['cliente_id', 'termo_id', 'nome', 'email'];


}
