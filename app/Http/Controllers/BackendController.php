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

        // các trang cố định
        $sitemap->add(route('home'))
        ->add(route('term'))
        ->add(route('privacy-policy'))
        ->add(route('responsibility'))
        ->add(route('version'));

        // các trang chiến dịch
        $campaigns = getAllCampaigns();
        foreach($campaigns as $campaign){
            $sitemap->add(route('merchant-filter', $campaign['merchant']));
        }

        // các trang bài viết & amp
        $posts = Post::select('slug', 'id')->where("status", "PUBLISHED")->get();
        foreach($posts as $post){
            $sitemap->add(route('post-detail', [$post->slug, $post->id]));
            $sitemap->add(route('amp-post-detail', [$post->slug, $post->id]));
        }

        // các trang danh mục
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
            return redirect()->route('home');
        }
    }

    public function promotionsRefresh(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.accesstrade.vn/v1/offers_informations",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"status\"\r\n\r\n1\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Token B2kFlVPlAlpqW66Z6nO8Ostbyesyku5Z",
            "Content-Type: application/json",
            "Postman-Token: 3320af3b-65ee-44ac-9b14-4caabc372742",
            "cache-control: no-cache",
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;

            $file = @fopen(public_path('data/promotions/promotions.json'), 'w+');
            if (!$file)
                echo "Mở file không thành công";
            else {
                fwrite($file, $response);
                return redirect()->route('home');
            }
        }
    }

    public function campaignsRefresh(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.accesstrade.vn/v1/campaigns",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Token B2kFlVPlAlpqW66Z6nO8Ostbyesyku5Z",
            "Content-Type: application/json",
            "Postman-Token: 6965f953-4329-4579-84ce-0cb17a794e9b",
            "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;

            $file = @fopen(public_path('data/campaigns/campaigns.json'), 'w+');
            if (!$file)
                echo "Mở file không thành công";
            else {
                fwrite($file, $response);
                return redirect()->route('home');
            }
        }
    }
}
