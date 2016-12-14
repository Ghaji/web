<?php

namespace Web\Providers;

use Illuminate\Support\ServiceProvider;

use Web\Navigations;
use Web\SubNavigations;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // send navigations to admin/dashboard views
        view()->composer(['admin/dashboard/*', 'page/*', 'error/*', 'home/*', 'pages/*', 'faculty/*', 'department/*', 'programme/*', 'library/*'], function($view) {
            
            $information = "Web V1.0.0 " . date('Y');

            $view->with('information',$information);


            $navigations = Navigations::with(['subNavigations' => function($query1){

                $query1->addSelect(['navigations_id', 'name', 'slug']);

            }])->where('category', '=', 'primary')->where('visible', '=', 1)->where('weight', '=', 1)->orderBy('position')->take(8)->get();

             $view->with('navigations',$navigations);

            // For side Navigation
            $sideNavigations = Navigations::with(['subNavigations' => function($query2){

                $query2->addSelect(['navigations_id', 'name', 'slug']);

            }])->where('category', '=', 'secondary')->where('visible', '=', 1)->where('weight', '=', 1)->orderBy('position')->take(7)->get();
            
            $view->with('sideNavigations',$sideNavigations);


            // For Faculty Side Navigation
            $mainNavigations = Navigations::with(['subNavigations' => function($query2){

                $query2->addSelect(['navigations_id', 'name', 'slug']);

            }])->where('category', '=', 'faculty')->where('visible', '=', 1)->where('weight', '=', 1)->orderBy('position')->take(7)->get();
            
            $view->with('mainNavigations',$mainNavigations);

            // For Department Side Navigation
            $departmentNavigations = Navigations::with(['subNavigations' => function($query2){

                $query2->addSelect(['navigations_id', 'name', 'slug']);

            }])->where('category', '=', 'department')->where('visible', '=', 1)->where('weight', '=', 1)->orderBy('position')->take(7)->get();
            
            $view->with('departmentNavigations',$departmentNavigations);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
