<?php

namespace App\Models;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{

    public $timestamps = false;
    
    protected $fillable = ['nom','ville_id'];
    
    public function ville()
    {
        return $this->belongsTo( Ville::class , 'ville_id');
    }
}
