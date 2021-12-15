<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $primaryKey = 'patient_id';
    protected $table='patients';
    protected $fillable=['dateOfvisit',
                         'time',
                         'diagnosis',
                         'veterinarian',
                         'testPerformed',
                         'testResult',
                         'medication',
                         'dosage',
                         'comments'];

    public function clientSide(){
        return $this->belongsTo('App\Models\Client');
    }
}
