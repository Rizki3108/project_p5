<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_guru', 'telepon', 'email', 'id_mapel'];
    public $timestamps = true;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    public function struktural()
    {
        return $this->hasMany(Struktural::class);
    }
}
