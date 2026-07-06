<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class InformasiPublik extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'klasifikasi_id',
        'judul',
        'ringkasan',
        'file',
        'filesize'
    ];

    public function klasifikasi()
    {
        return $this->belongsTo(Klasifikasi::class, 'klasifikasi_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($informasi) {

            if (empty($informasi->uuid)) {
                $informasi->uuid = Str::uuid();
            }

        });
    }
}
