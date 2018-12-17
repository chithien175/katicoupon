<?php

function getAllCoupons(){
    // Read File
    $jsonString = file_get_contents(public_path('data/coupons/coupons.json'));
    $data = json_decode($jsonString, true);
    // dd($data);
    return $data;
}

function getAllPromotions(){
    // Read File
    $jsonString = file_get_contents(public_path('data/promotions/promotions.json'));
    $data = json_decode($jsonString, true);
    // dd($data);
    return $data;
}

function getAllCampaigns(){
    // Read File
    $jsonString = file_get_contents(public_path('data/campaigns/campaigns.json'));
    $data = json_decode($jsonString, true);
    // dd($data);
    return $data;
}