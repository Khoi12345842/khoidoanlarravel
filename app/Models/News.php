<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news'; // Định nghĩa tên bảng

    protected $fillable = ['title', 'content', 'thumbnail', 'category_id'];

    // Quan hệ với Category (Mỗi tin tức thuộc về một danh mục)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

