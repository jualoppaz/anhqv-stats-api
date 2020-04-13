<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('Anhqv\Character\CharacterRepoInterface', 'Anhqv\Character\CharacterRepo');
        App::bind('Anhqv\Chapter\ChapterRepoInterface', 'Anhqv\Chapter\ChapterRepo');
        App::bind('Anhqv\Actor\ActorRepoInterface', 'Anhqv\Actor\ActorRepo');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
