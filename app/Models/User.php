<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;
use App\Http\Controllers\UserController;

class User extends Model
{
    use HasFactory;
    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
