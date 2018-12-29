<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class FrontendController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function merchantFilter($merchant){
        return view('pages.merchant-filter')->withMerchant($merchant);
    }

    public function postDetail($slug, $id){
        $post = Post::where(["status" => "PUBLISHED", "slug" => $slug, "id" => $id])->first();
        if($post){
            return view('posts.post-detail')->withPost($post);
        }
        return \abort(404);
    }

    public function postByCate($slug){
        $category = Category::where('slug', $slug)->first();
        if($category){
            $posts = Post::select('id', 'slug', 'image', 'title', 'meta_description', 'category_id', 'created_at')->where('category_id', $category->id)->orderBy('created_at', 'desc')->get();
            return view('posts.post-by-cate')->withPosts($posts)->withCategory($category);
        }
        return \abort(404);
    }
}
