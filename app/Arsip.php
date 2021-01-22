<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'kategori', 'dokumen', 'dilihat'];
}
