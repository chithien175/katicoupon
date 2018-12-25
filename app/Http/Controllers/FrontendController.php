<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

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
}
