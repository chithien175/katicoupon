<?php

// Get All Promotions
function getAllPromotions($merchant = NULL){
    // Read File
        $jsonString = file_get_contents(public_path('data/promotions/promotions.json'));
        $data = json_decode($jsonString, true);

    // Nếu merchant == NULL thì return all promotions
    // Nếu merchant != NULL thì return promotions theo merchant
    if($merchant == NULL){
        return $data['data'];
    }else{
        foreach($data['data'] as $k => $v){
            if($v['merchant'] != $merchant){
                unset($data['data'][$k]);
            }
        }
        return $data['data'];
    }
}



// Get All Campaigns
function getAllCampaigns(){
    // Read File
    $jsonString = file_get_contents(public_path('data/campaigns/campaigns.json'));
    $data = json_decode($jsonString, true);
    return $data;
}