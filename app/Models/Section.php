<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;

class Section extends Model
{
    use HasFactory;
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
