<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    public function getBank()
    {
        // return $this->hasOne(Bank::class);
        return $this->belongsTo(Bank::class, 'bank_id', 'id');
    }
}
