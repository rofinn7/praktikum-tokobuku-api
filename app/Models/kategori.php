<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $guarded =['id'];

    public function buku()
    {
        return $this->hasMany(buku::class);
    }
}
