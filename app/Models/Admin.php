<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'admin_id';
    protected $table='admins';
    protected $fillable=['fname',
                         'mname',
                         'lname',
                         'bdate',
                         'gender',
                         'address',
                         'username',
                         'email',
                         'password',
                         'profilePic',
                         'contact_num',
                         'age'];

    public function branchSide(){
        return $this->belongsTo('App\Models\Branch');
    } 

    public function messages()
    {
        return $this->hasMany('App\Models\Message','admin_id');
    }
}
