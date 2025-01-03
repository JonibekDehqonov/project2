<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{

    use HasFactory;

    protected $fillable=
    [
        'body',
        'post_id',
        'user_id',
    ];

    public function post()
    {
        $this->BelongsTo(Post::class);
    }
    public function user()
    {
        $this->BelongsTo(User::class);
    }
}
