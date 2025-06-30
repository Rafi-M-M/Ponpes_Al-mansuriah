<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'hp', 'alamat', 'asal_sekolah', 'jk', 'tgl_lahir', 'file_upload'
    ];
}
