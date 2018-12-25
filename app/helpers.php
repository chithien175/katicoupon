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
 * @paginate: number
 */
if(! function_exists('getAllPosts')){
    function getAllPosts($select='*', $cat_id, $order_col, $order_by='asc', $paginate = 3){
        $item = TCG\Voyager\Models\Post::select($select)
                    ->where(["status" => "PUBLISHED", "category_id" => $cat_id])
                    ->orderBy($order_col, $order_by)
                    ->paginate($paginate);
        return $item;
    }
}