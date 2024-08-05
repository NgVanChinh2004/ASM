<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    use HasFactory;
    
    protected $table = 'news';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'tieude',
        'tomtat',
        'image',
        'noidung',
        'idLT',
    ];

    public function loaitin() {
        return $this->belongsTo(LoaiTin::class, 'idLT'); 
    }

}
