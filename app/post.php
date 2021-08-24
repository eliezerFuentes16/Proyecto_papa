<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable=['TITULO', 'DESCRIPCION', 'FECHA', 'SUB_TITULO1', 'PARRAFO1', 'FOTO1', 'SUB_TITULO2', 'PARRAFO2', 'FOTO2', 'SUB_TITULO3', 'PARRAFO3', 'FOTO3'];
}
