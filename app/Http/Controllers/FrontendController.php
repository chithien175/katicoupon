<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function merchantFilter($merchant){
        return view('pages.merchant-filter')->withMerchant($merchant);
    }

    public function postDetail($slug, $id){
        return view('posts.post-detail');
    }
}
