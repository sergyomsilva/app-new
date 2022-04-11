<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Services\GoogleNewsService;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class GetNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para buscar novas notícias na API Google News';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {

            $response = (new \App\Services\GoogleNewsService())->getNews();

            foreach ($response->articles as $post){

                $post = Post::create([
                    'title' => $post->title,
                    'description' => $post->description,
                    'url' => $post->url,
                    'urlToImage' => $post->urlToImage,
                    'content' => $post->content,
                    'publishedAt' => (new Carbon($post->publishedAt))->format("Y-m-d H:m:i"),
                ]);
            }
        }catch (Exception $exception){
            Log::error("Error ao realizar a busca de novas noticias: {$exception->getCode()} --- {$exception->getMessage()}");
        }
    }
}
