<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('layout.layout', function ($view) {
            $lang = \LaravelLocalization::getCurrentLocale();
           

            $lang_ = ($lang == 'en') ? 1 : 2;

            $menus = \DB::table('cms_menus')
                ->select(
                    "cms_menus.name as title_en",
                    "cms_menus.type as type",
                    "cms_menus.path as url",
                    "cms_menus.id as id",
                    "cms_menus.parent_id"
                )->where('cms_menus.is_active', 1)->where('cms_menus.is_front', 1)->where('parent_id','=',0)->where('lang_id', $lang_)->orderBy("cms_menus.sorting")
                ->get();

            $sons =  \DB::table('cms_menus')
            ->select(
                "cms_menus.name as title_en",
                "cms_menus.type as type",
                "cms_menus.path as url",
                "cms_menus.id as id",
                "cms_menus.parent_id"
            )->where('cms_menus.is_active', 1)->where('cms_menus.is_front', 1)->where('parent_id','!=',0)->where('lang_id', $lang_)->orderBy("cms_menus.sorting")
            ->get();

            foreach ($sons as $item) {
                foreach ($menus as $m) {
                    if ($item->parent_id == $m->id) {
                        $m->sons[] = $item;
                    }
                }
            }
            // dd($menus);

              $socials = \DB::table('social_media')->orderBy('sorting', 'asc')->where([
                'active' => 1,
            ])->get();
            // $info = \DB::table('info')->select(
            //     'location_' . $lang . ' as location',
            //     'time_' . $lang . ' as time',
            //     'email',
            //     'phone',
            //     'id'
            // )->where([
            //     'active' => 1,
            // ])->orderBy('sorting', 'asc')->first();
            $view->with([
                "menus" => $menus,
                "socials" => $socials
                // "info" =>$info,
            ]);
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