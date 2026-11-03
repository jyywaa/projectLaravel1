<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //kita masukan tabel yg digunakan
    protected $table = 'items';
    // kolom-kolom yang di izinkan untuk diisi lewat form
    protected $fillable =[
        'code',
        'item_name',
        'category',
        'stock',
        'condition',
        'room_location'
    ];
}
