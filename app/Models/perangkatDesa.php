<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perangkatDesa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'perangkat_desas';
    protected $fillable = ['nama','jabatan','image'];


}
