<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KasKeuangan extends Model
{
    protected $fillable = [
        'user_id', 'jenis_transaksi', 'kategori', 'nominal', 'tanggal_transaksi', 'keterangan'
    ];

    protected $casts = [
        'tanggal_transaksi' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
