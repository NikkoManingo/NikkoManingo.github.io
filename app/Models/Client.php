<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'client_id';
    protected $table='clients';
    protected $fillable=['profilePic',
                        'fname',
                         'mname',
                         'lname',
                         'bdate',
                         'gender',
                         'age',
                         'address',
                         'contact_number',
                         'email',
                         'password',
                         'SQ_question',
                         'SQ_answer'];

    public function branchSide(){
        return $this->belongsTo('App\Models\Branch');
    }

    public function patientRelation()
    {
        return $this->hasMany('App\Models\Patient','client_id');
    }

    public function petSide(){
        return $this->hasMany('App\Models\Pet','client_id');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message','client_id');
    }

    public function client_messages()
    {
        return $this->hasMany('App\Models\ClientMessage','client_id');
    }
    
}
