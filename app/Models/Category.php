<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function posts() 
    {
        // Postに対するリレーション
        // 「1対多」の関係なので'posts'と複数形に
        return $this->hasMany(Post::class);
    }
    
    public function getByCategory(int $limit_count = 15)
    {
        return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}


