<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profilDesa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'profil_desas';
    protected $fillable = ['kategori','body'];


}
