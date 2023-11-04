<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
