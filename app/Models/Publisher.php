<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $table = 'publisher';
    public function Books(){
        return $this->hasMany('App\Models\books','publisher_id');
    }
}
