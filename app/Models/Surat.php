<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Surat extends Model
{
    protected $fillable = [
        'user_id', 'jenis_surat', 'keperluan', 'data_tambahan', 'status', 'keterangan_penolakan'
    ];

    protected $casts = [
        'data_tambahan' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
