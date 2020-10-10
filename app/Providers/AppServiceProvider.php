<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Conversation;
use App\Chapter;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (\App::environment('production')) {
            \URL::forceScheme('https');
          }
        $apps_con = Conversation::get(['id','chapter_id','unit']);
        $apps_cha = Chapter::get('chapter_id');
        $data = array(
            'apps_con' => $apps_con,
            'apps_cha' => $apps_cha
        );
        View::share('data',$data);
    }
}
