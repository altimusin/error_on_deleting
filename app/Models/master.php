<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function details()
    {
        return $this->hasMany(Detail::class,'master_id','id');
    }
}
