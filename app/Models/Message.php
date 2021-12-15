<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $primaryKey = 'message_id';
    protected $table='messages';
    protected $fillable=['body'];

    public function clientSide(){
        return $this->belongsTo('App\Models\Client');
    }

    public function AdminSide(){
        return $this->belongsTo('App\Models\Admin');
    }
}
