<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $primaryKey = 'pet_id';
    protected $table='pets';
    protected $fillable=['name',
                         'color',
                         'picture',
                         'marking',
                         'species',
                         'condition',
                         'breed',
                         'bdate',
                         'allergies',
                         'sex'];

    public function patientSide()
    {
        return $this->hasOne('App\Models\Patient', 'pet_id');
    }

    public function clientSide(){
        return $this->belongsTo('App\Models\Client');
    }
}
