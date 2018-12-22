<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

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

        $sitemap->writeToFile('sitemap.xml');
     
        return redirect('sitemap.xml');
    }
}
