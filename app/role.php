<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function clients()
   {
       return $this->belongsToMany(client::class);
       
   }
}
