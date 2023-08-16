<?php
declare(strict_types=1);
namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    protected $table = 'posts';
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\PostsFactory::new();
    }
}
