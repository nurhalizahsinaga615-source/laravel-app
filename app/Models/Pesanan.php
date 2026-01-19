<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    // NAMA TABEL ASLI
    protected $table = 'tb_pesanan';

    // PRIMARY KEY
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'pelanggan_id',
        'menu_id',
        'jumlah',
        'total_harga'
    ];

    public $timestamps = true;

    // RELASI KE PELANGGAN
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id_pelanggan');
    }

    // RELASI KE MENU
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id_menu');
    }
}
