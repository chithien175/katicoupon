<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage(){
        return view('pages.home');
    }

    // protected function PHPcURL($module = ''){
    //     $curl = curl_init();
    //     curl_setopt_array($curl, array(
    //     CURLOPT_URL => "https://api.accesstrade.vn/v1/".$module,
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => "",
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 30000,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => "GET",
    //     CURLOPT_HTTPHEADER => array(
    //         "Authorization: Token B2kFlVPlAlpqW66Z6nO8Ostbyesyku5Z",
    //         "Content-Type: application/json",
    //         "Postman-Token: 2c33f722-de59-4a1c-92a1-bdbc7c9f3f79",
    //         "cache-control: no-cache"
    //     ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);

    //     if ($err) {
    //         return false;
    //     } else {
    //         return $response;
    //     }
    // }
}