<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
   public function cubrid_client_encoding()
   {
     return $his->belongsTo('App\Client');
   }
}
