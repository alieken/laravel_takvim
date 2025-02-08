<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etkinlik extends Model
{
    protected $fillable = ['kullanici', 'baslik', 'aciklama', 'baslangic', 'bitis'];


    use HasFactory;
}
