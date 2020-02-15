<?php

namespace App\Services;

// -- ここから追加
use GuzzleHttp\Client;
// -- ここまで追加

class Gurunavi
{    
    public function searchRestaurants($word)
    {
    // -- ここから追加
        $client = new Client();
        $response = $client
            ->get('https://api.gnavi.co.jp/RestSearchAPI/v3/', [
                'query' => [
                    'keyid' => env('GURUNAVI_ACCESS_KEY'),
                    'freeword' => str_replace(' ', ',', $word),
                ],
                'http_errors' => false,
            ]);
            
        return json_decode($response->getBody()->getContents(), true);
    // -- ここまで追加
    }
}