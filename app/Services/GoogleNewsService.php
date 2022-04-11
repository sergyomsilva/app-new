<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleNewsService
{

    private string $token;

    /**
     * @param string $token
     */
    public function __construct(?string $token=null)
    {
        $this->token = (empty($token)) ? getenv('API_GOOGLE_NEWS_TOKEN') : $token;
    }

    public function getNews()
    {
        $response = Http::get("https://newsapi.org/v2/top-headlines?sources=google-news-br&apiKey={$this->token}");

        if($response->successful()){

            return $response->object();
        }else{
            return $response->throw();
        }
    }


}
