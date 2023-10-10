<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kabarDesa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
        });

        $query->When($filters['kategori'] ?? false, function ($query, $kategori) {
            return $query->where('kategori', request('kategori'));
        });

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
