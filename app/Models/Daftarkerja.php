<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Daftarkerja extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName(){
        return 'slug';
    }
    public function kliks()
    {
        return $this->HasMany(klik::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(tag::class);
        
    }
}
