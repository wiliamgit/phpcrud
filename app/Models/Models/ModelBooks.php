<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\NomeDaController;

class ModelBooks extends Model
{
    protected $table='book';

    //relacionamrto com e books
    public function relUser()
    {
        //hasOne - relacionamto 1 para 1
        return $this->hasOne('App\Models\User', 'id','id_user');
        //id - da propria Tabela || id_user - onde esta a chave estrangeira
    }
}
