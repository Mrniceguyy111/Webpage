<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "author_id",
        "title",
        "slug",
        "content",
        "category",
        "is_active",
        "banner_image"
    ];

    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 60);
    }

    public function getPublishedAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    public function getRefreshAtAttribute()
    {
        return $this->updated_at->diffForHumans();
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category_data()
    {
        return $this->belongsTo(PostCategory::class, 'category');
    }
}
