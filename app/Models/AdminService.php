<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminService extends Model
{
    use HasFactory;
    protected $primaryKey = 'admin_service_id';
    protected $table='admin_services';
    protected $fillable=['service_code',
                         'service_name',
                         'service_price',
                         'service_image',
                         'service_description'];

    public function branchSide(){
        return $this->belongsTo('App\Models\Branch');
    }
}
