<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $primaryKey = 'branch_id';
    protected $table='branches';
    protected $fillable=['branch_address'];

    public function clientSide(){
        return $this->hasOne('App\Models\Client','branch_id');
    }

    public function adminSide(){
        return $this->hasOne('App\Models\Admin','branch_id');
    }

    public function AdminServiceSide(){
        return $this->hasMany('App\Models\AdminService','branch_id');
    }
}
