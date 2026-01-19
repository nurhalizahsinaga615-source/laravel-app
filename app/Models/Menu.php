<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'tb_menu';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'pelanggan_id',
        'nama_menu',
        'harga'
    ];

    public $timestamps = true;

    // RELASI: Menu milik satu Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id_pelanggan');
    }
}
