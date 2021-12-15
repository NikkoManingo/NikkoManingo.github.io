<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMessage extends Model
{
    use HasFactory;
    protected $primaryKey = 'client_messages_id';
    protected $table='client_messages';
    protected $fillable=['body'];

    public function clientSide(){
        return $this->belongsTo('App\Models\Client');
    }
}
