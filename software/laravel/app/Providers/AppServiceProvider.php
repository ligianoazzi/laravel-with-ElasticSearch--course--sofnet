<?php

namespace App\Providers;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        /** @var Client *client */
        $client = app(Client::class);
        $index = ['index' => ('ES_INDEX')];
        if(!$client->indices()->exists($index)){
            $client->indices()->exists($index);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Client::class, function(){
            return  ClientBuilder::create()->build();
        });
    }
}
