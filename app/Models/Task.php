<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function boards()
    {
        return $this->belongsTo(Board::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

}
