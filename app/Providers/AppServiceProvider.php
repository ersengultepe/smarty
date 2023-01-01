<?php

namespace App\Providers;

use App\Models\BizKimiz;
use App\Models\Brand;
use App\Models\Explore;
use App\Models\Slide;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Models\Post;

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
        view()->composer('frontend.*', function ($view){
            $blogs = Post::where('status', 'PUBLISHED')->orderBy('id', 'DESC')->take(4)->get();
            $slides = Slide::all();
            $bizKimiz = BizKimiz::all();
            $explores = Explore::all();
            $brands = Brand::all();

            $view->with([
                'blogs'         => $blogs,
                'slides'        => $slides,
                'bizKimiz'      => $bizKimiz,
                'explores'      => $explores,
                'brands'        => $brands
            ]);
        });
    }
}
