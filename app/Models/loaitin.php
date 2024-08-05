<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    use HasFactory;

    protected $table = 'loaitin';

    protected $fillable = [
        'tenloai',
    ];

    public function tins() {
        return $this->hasMany(Tin::class, 'idLT');
    }

}
