<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class FrontendController extends Controller
{
    // Trang chủ
    public function home(){
        $products = getAllProducts(1, 14);
        return view('pages.home')->withProducts($products);
    }

    // Trang nhà cung cấp
    public function merchantFilter($merchant){
        return view('pages.merchant-filter')->withMerchant($merchant);
    }

    // Trang chi tiết bài viết
    public function postDetail($slug, $id){
        $post = Post::where(["status" => "PUBLISHED", "slug" => $slug, "id" => $id])->first();
        if($post){
            // Lấy tin liên quan
            $related_posts = Post::select('id','title','slug')->where(["status" => "PUBLISHED", "category_id" => $post->category_id])
                ->where("id", "!=", $post->id)
                ->limit(3)->get();
            return view('posts.post-detail')->withPost($post)->withRelatedPosts($related_posts);
        }
        return \abort(404);
    }

    // Trang chi tiết bài viết AMP (Mobile)
    public function ampPostDetail($slug, $id){
        $post = Post::where(["status" => "PUBLISHED", "slug" => $slug, "id" => $id])->first();
        if($post){
            return view('amp.post-detail')->withPost($post);
        }
        return \abort(404);
    }

    // Trang danh sách bài viết theo danh mục
    public function postByCate($slug){
        $category = Category::where('slug', $slug)->first();
        if($category){
            $posts = Post::select('id', 'slug', 'image', 'title', 'meta_description', 'category_id', 'created_at')->where('category_id', $category->id)->orderBy('created_at', 'desc')->get();
            return view('posts.post-by-cate')->withPosts($posts)->withCategory($category);
        }
        return \abort(404);
    }

    // Trang ds sản phẩm hot deal theo Tikivn
    public function dealHot(Request $request){
        $page = ( isset($request->page) ) ? $request->page : 1;
        $products = getAllProducts($page, 20);
        return view('products.deal-hot')->withProducts($products)->withPage($page);
    }
}
