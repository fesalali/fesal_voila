<?php

namespace App\Http\Controllers;

use \DB;

class FrontController extends Controller
{
    public $lang;
    public function __construct()
    {
        // /\App::setLocale(session()->get('locale'));
    }

    public function index()
    {

        try {

            $this->lang = (\App::getLocale()) ? \App::getLocale() : 'en';

            $seo = DB::table('seo')->where([
                'model' => 'home',
                'model_id' => null,
            ])->first();

            $data["services"] = DB::table("services")->select(
                'title_' . $this->lang . ' as title',
                'text_' . $this->lang . ' as text',
                'image_home_page as image',
                'id'

            )->where([
                'active' => 1,
            ])->orderBy('sorting', 'asc')->get();

            $arr = array('data' => $data,'seo' => $seo);

            return view('front.index',$arr);
        } catch (\Throwable $th) {
            return view('errors.500');

        }

    }

    public function services($id=null)
    {
        try {

            $this->lang = (\App::getLocale()) ? \App::getLocale() : 'en';

            $seo = DB::table('seo')->where([
                'model' => 'home',
                'model_id' => null,
            ])->first();
            
            $data["services"] = DB::table("services")->select(
                'title_' . $this->lang . ' as title',
                'text_' . $this->lang . ' as text',
                'image as image',
                'id'

            )->where([
                'active' => 1,
            ])->orderBy('id', $id)->get();
            $services=[];

            foreach ($data["services"] as $item) {
                if($id==$item->id){
                    $service[]=$item;
                }
            }

            foreach ($data["services"] as $item) {
                if($id!=$item->id){
                    $service[]=$item;
                }
            }

            // dd($service);

            

            $arr = array('data' => $service,'seo' => $seo);
            // dd($arr);
            return view('front.services',$arr);
        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage(), 1);

        }
    }

    public function blogs($id=null)
    {
        try {

            $this->lang = (\App::getLocale()) ? \App::getLocale() : 'en';

            $seo = DB::table('seo')->where([
                'model' => 'blogs',
                'model_id' => $id,
            ])->first();

            if(!$seo){
                $seo = DB::table('seo')->where([
                    'model' => 'home',
                    'model_id' => null,
                ])->first();
            }
            
            $data["blogs"] = DB::table("blogs")->select(
                'title_' . $this->lang . ' as title',
                'text_' . $this->lang . ' as text',
                'image as image',
                'id'

            )->where([
                'active' => 1,
            ])->orderBy('sorting', 'asc')->get();

            if($id){
                $data["blog"] = DB::table("blogs")->select(
                    'title_' . $this->lang . ' as title',
                    'text_' . $this->lang . ' as text',
                    'image as image',
                    'id'
    
                )->where([
                    'active' => 1,
                    'id'=>$id
                ])->first();

                if(!$blog){

                    return redirect('/blogs');
                }
    
            }
            else{

                $data["blog"] = DB::table("blogs")->select(
                    'title_' . $this->lang . ' as title',
                    'text_' . $this->lang . ' as text',
                    'image as image',
                    'id'
    
                )->where([
                    'active' => 1,
                ])->orderBy('sorting', 'asc')->first();
    
            }
           

            $arr = array('data' => $data,'seo' => $seo);

            return view('front.blogs',$arr);
        } catch (\Throwable $th) {
            return view('errors.500');


        }
    }

    public function aboutUs()
    {

        try {

            $this->lang = (\App::getLocale()) ? \App::getLocale() : 'en';

            $seo = DB::table('seo')->where([
            'model' => 'about_us',
                'model_id' => null,
            ])->first();

            if(!$seo){
                $seo = DB::table('seo')->where([
                    'model' => 'home',
                    'model_id' => null,
                ])->first();
            }
            $data["about_us"] = DB::table("about_us")->select(
                'title_' . $this->lang . ' as title',
                'text_' . $this->lang . ' as text',
                'id'

            )->where([
                'active' => 1,
            ])->orderBy('sorting', 'asc')->get();

            $arr = array('data' => $data,'seo' => $seo);

            return view('front.about',$arr);
        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage(), 1);
            

        }

    }

    public function contactUs()
    {
        return view('front.contact');

    }

    public function faq()
    {
        try {

            $this->lang = (\App::getLocale()) ? \App::getLocale() : 'en';

            $seo = DB::table('seo')->where([
                'model' => 'faq',
                    'model_id' => null,
                ])->first();
    
                if(!$seo){
                    $seo = DB::table('seo')->where([
                        'model' => 'home',
                        'model_id' => null,
                    ])->first();
                }

            $data["faq"] = DB::table("faq")->select(
                'title_' . $this->lang . ' as title',
                'text_' . $this->lang . ' as text',
                'id'
            )->where([
                'active' => 1,
            ])->orderBy('sorting', 'asc')->get();

            $arr = array('data' => $data,'seo' => $seo);

            return view('front.faq',$arr);
        } catch (\Throwable $th) {
            return view('errors.500');

        }
        

    }



    public function testimonials()
    {
        try {

            $this->lang = (\App::getLocale()) ? \App::getLocale() : 'en';

            $seo = DB::table('seo')->where([
                'model' => 'testimonials',
                    'model_id' => null,
                ])->first();
    
                if(!$seo){
                    $seo = DB::table('seo')->where([
                        'model' => 'home',
                        'model_id' => null,
                    ])->first();
                }

            $data["testimonials"] = DB::table("testimonials")->select(
                'name as title',
                'text as text',
                'image as image',
                'id'

            )->where([
                'active' => 1,
            ])->orderBy('sorting', 'asc')->get();

            $arr = array('data' => $data,'seo' => $seo);

            return view('front.testimonials',$arr);
        } catch (\Throwable $th) {
            return view('errors.500');

        }
    }

}
