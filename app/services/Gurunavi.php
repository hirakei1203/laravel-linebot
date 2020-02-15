<?php

namespace App\Services;

// -- ここから追加
use GuzzleHttp\Client;
// -- ここまで追加

class Gurunavi
{
    private const RESTAURANTS_SEARCH_API_URL = 'https://api.gnavi.co.jp_RestSearchAPI/v3/';
    public function searchRestaurants(string $word): array
    {
    // -- ここから追加
        $client = new Client();
        $response = $client
            ->get('self::RESTURANTS_SEARCH_API_URL', [
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