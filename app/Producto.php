<?php

namespace compra_venta;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
     protected $fillable = ['nombre','categoria','cantidad','precio','descripcion','rut'];
}
