<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'comment',
        'status',
        'post_id',
        'user_id',
        'comment_id',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);

    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function parentComment()
    {
        return $this->BelongsTo(Comment::class);

    }

    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);

    }
}
