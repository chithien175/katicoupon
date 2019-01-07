<?php
use Illuminate\Pagination\LengthAwarePaginator;

// Get All Promotions
if(! function_exists('getAllPromotions')){
    function getAllPromotions($merchant = NULL, $pagination = 15){
        // Read File
        $jsonString = file_get_contents(public_path('data/promotions/promotions.json'));
        $data = json_decode($jsonString, true);
    
        $promotions = $data['data'];
    
        // Nếu merchant == NULL thì return all promotions
        // Nếu merchant != NULL thì return promotions theo merchant
        if($merchant != NULL){
            foreach($promotions as $k => $v){
                if($v['merchant'] != $merchant){
                    unset($promotions[$k]);
                }
            }
        }
    
        $promotions = collect($promotions)->sortBy('end_time');
        $promotions = paginationArray($promotions, $pagination);
    
        return $promotions;
    }
}


// Get All Campaigns
if(! function_exists('getAllCampaigns')){
    function getAllCampaigns(){
        // Read File
        $jsonString = file_get_contents(public_path('data/campaigns/campaigns.json'));
        $data = json_decode($jsonString, true);
        $campaigns = $data['data'];
        return $campaigns;
    }
}


// Phân trang từ mảng
if(! function_exists('paginationArray')){
    function paginationArray($array, $pagination){
        // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
    
        // Create a new Laravel collection from the array data
        $itemCollection = collect($array);
    
        // Define how many items we want to be visible in each page
        $perPage = $pagination;
    
        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
    
        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
    
        // set url path for generted links
        $paginatedItems->setPath(url()->current());
    
        return $paginatedItems;
    }
}

/*
 * @select: string
 * @cat_id: number
 * @order_col: string
 * @order_by: asc/desc
 * @limit: number
 */
if(! function_exists('getAllPosts')){
    function getAllPosts($select='*', $order_col, $order_by='asc', $limit = 3){
        $item = TCG\Voyager\Models\Post::select($select)
                    ->where("status", "PUBLISHED")
                    ->orderBy($order_col, $order_by)
                    ->limit($limit)
                    ->get();
        return $item;
    }
}

if(! function_exists('getAllCategories')){
    function getAllCategories(){
        $item = TCG\Voyager\Models\Category::select('*')->orderBy('order','asc')->get();
        return $item;
    }
}

function _domradio_util_ampify_img ($html) {
    preg_match_all("#<img(.*?)\\/?>#", $html, $matches);
    foreach ($matches[1] as $key => $m) {
    preg_match_all('/(alt|src|width|height)=("[^"]*")/i', $m, $matches2);
    $amp_tag = '<amp-img ';
    foreach ($matches2[1] as $key2 => $val) {
        $amp_tag .= $val .'='. $matches2[2][$key2] .' ';
    }
    $amp_tag .= 'layout="responsive"';
    $amp_tag .= '>';
    $amp_tag .= '</amp-img>';
    $html = str_replace($matches[0][$key], $amp_tag, $html);
    }
    return $html;
}

// Get All Products
if(! function_exists('getAllProducts')){
    function getAllProducts($page = 1, $per_page = 20){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://tiki.vn/api/v2/events/deals/?type=now&page=".$page."&per_page=".$per_page,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "Postman-Token: 544857c0-e212-4331-886b-3a769a1b645d",
            "cache-control: no-cache"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response, false);
        $products = $response->data;

        if ($err) {
        echo "cURL Error #:" . $err;
        }

        return $products;
    }
}