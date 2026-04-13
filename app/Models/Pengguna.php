<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'public.pengguna';
    //nama kolom yang bisa di isi
    protected $fillable = ['email', 'password'];
    //nama primarykey
    protected $primaryKey = 'id_pengguna';

    public $timestamps = true;
}