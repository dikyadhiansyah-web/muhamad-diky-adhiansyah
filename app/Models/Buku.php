<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    //nama kolom yang bisa di isi
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun_terbit'];
    //nama primarykey
    protected $primaryKey = 'id_buku';

    public $timestamps = true;
}