<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    /*
     * Post一覧を表示する
     *
     * @param Post Postモデル
     * @return array Postモデルリスト
     */
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory(), 'category' => $category]);
    }
}
