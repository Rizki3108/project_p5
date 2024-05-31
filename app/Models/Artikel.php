<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'judul', 'isi', 'sampul'];
    public $timestamps = true;

    public function deleteImage(){
        if($this->sampul && file_exists(public_path('images/artikel' . $this->sampul))){
            return unlink(public_path('images/artikel' . $this->sampul));
        }
    }
}