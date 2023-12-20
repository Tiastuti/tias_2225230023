<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tianaf extends Model
{
    use HasFactory;
    protected $table= "tianaf";
    protected $fillable= ['Nama','No_HP','Alamat','Jenis_Tiket','Harga','Jumlah_Tiket','Total_Harga'];
}
