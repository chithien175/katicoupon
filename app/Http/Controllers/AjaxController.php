<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getCouponByPromotionId(Request $request){
        // Read File
        $jsonString = file_get_contents(public_path('data/promotions/promotions.json'));
        $data = json_decode($jsonString, true);
        $promotion_list = $data['data'];

        foreach($promotion_list as $key => $value){
            if($value['id'] == $request['promotion_id']){
                $promotion = $promotion_list[$key];
            }
        }

        if(isset($promotion)){
            return response()->json([
                'status' => true,
                'data' => $promotion
            ]);
        }

        return response()->json([
            'status' => false
        ]);
        
    }
}
