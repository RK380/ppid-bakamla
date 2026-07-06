<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Klasifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'klasifikasi'
    ];

    public function informasipublik()
    {
        return $this->hasMany(InformasiPublik::class, 'klasifikasi_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid()->toString();
            }
        });
    }
}
