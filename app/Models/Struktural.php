<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktural extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_guru', 'id_jabatan'];
    public $timestamps = true;

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }
}
