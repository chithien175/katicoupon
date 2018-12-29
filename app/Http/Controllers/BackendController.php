<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class BackendController extends Controller
{
    public function generateSitemap(){
        $sitemap = Sitemap::create();

        $sitemap->add(route('home'))
        ->add(route('term'))
        ->add(route('privacy-policy'))
        ->add(route('responsibility'))
        ->add(route('version'));

        $campaigns = getAllCampaigns();
        foreach($campaigns as $campaign){
            $sitemap->add(route('merchant-filter', $campaign['merchant']));
        }

        $review_posts = Post::select('slug', 'id')->where("status", "PUBLISHED")->get();
        foreach($review_posts as $review_post){
            $sitemap->add(route('post-detail', [$review_post->slug, $review_post->id]));
        }

        $categories = Category::select('slug')->get();
        foreach($categories as $category){
            $sitemap->add(route('post-by-cate', $category->slug));
        }

        $sitemap->writeToFile('sitemap.xml');
     
        return redirect('sitemap.xml');
    }

    public function minifyCss(){
        // setup the URL and read the CSS from a file
        $url = 'https://cssminifier.com/raw';
        $css = file_get_contents(public_path('css/custom.css'));

        // init the request, set various options, and send it
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
            CURLOPT_POSTFIELDS => http_build_query([ "input" => $css ])
        ]);

        $minified = curl_exec($ch);

        // finally, close the request
        curl_close($ch);

        $file = @fopen(public_path('css/custom.min.css'), 'w+');
        if (!$file)
            echo "Mở file không thành công";
        else {
            fwrite($file, $minified);
        }

        return redirect()->route('home');
    }
}
