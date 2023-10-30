<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['room_id','categori_service_id','title','duration','price','status','image','description'];


    public function room()
    {
        return $this->belongsToMany(rooms::class, 'rooms_service');
    }
}
