<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class YourModel extends Model
{
    protected $table = 'posts_table';
}
class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function isLikedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}
