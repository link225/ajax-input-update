<?php

namespace App\Models;

use App\Models\Quartier;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\False_;

class Ville extends Model
{
    
    protected $fillable =['nom'];

    public $timestamps = False;

    public function quartier()
    {
        return $this->hasMany(Quartier::class, 'ville_id');
    }
}
