<?php

namespace Web\Http\Controllers;

use Web\Http\Requests;
use Illuminate\Http\Request;
use Web\Http\Controllers\Controller;
use Web\Navigations;
use Web\SubNavigations;
use Web\Pages;
use Web\News;
use DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // dd($sug_day);
        return view('home.index');
    }

    public function show($slug)
    {

        $news   = News::whereSlug($slug)->first();
            
        // return the variable to view (navigations)
        return view('home.single', compact('news'));   
    }

    public function listshow()
    {
        $news_lists   = News::whereVisible(1)->whereVerified(1)->paginate(5);  
                 
        // return the variable to view (navigations)
        return view('home.list', compact('news_lists'));   
        
    }

    // news list only
    public function news()
    {
        $news   = News::whereItype(1)->whereVisible(1)->whereVerified(1)->paginate(5);          
        // return the variable to view (navigations)
        return view('home.news', compact('news'));   
        
    }

    // Events list only
    public function events()
    {
        $events   = News::whereItype(2)->whereVisible(1)->whereVerified(1)->paginate(5);           
        // return the variable to view (navigations)
        return view('home.events', compact('events'));   
        
    }

    // Events list only
    public function jobVacancy()
    {
        $jobs   = News::whereItype(3)->whereVisible(1)->whereVerified(1)->paginate(5);           
        // return the variable to view (navigations)
        return view('home.job_vacancy', compact('jobs'));   
        
    }

    public function salesForms()
    {
        $forms   = News::whereItype(4)->whereVisible(1)->whereVerified(1)->paginate(5);           
        // return the variable to view (navigations)
        return view('home.sales_forms', compact('forms'));   
        
    }

    public function advertisement()
    {
        $advertisements   = News::whereItype(4)->whereVisible(1)->whereVerified(1)->paginate(5);           
        // return the variable to view (navigations)
        return view('home.advertisement', compact('advertisements'));   
        
    }

    public function inuguralLectures()
    {
        $lectures   = News::whereItype(6)->whereVisible(1)->whereVerified(1)->paginate(5);           
        // return the variable to view (navigations)
        return view('home.inugural_lectures', compact('lectures'));   
        
    }

    public function conferences()
    {
        $conferences   = News::whereItype(7)->whereVisible(1)->whereVerified(1)->paginate(5);           
        // return the variable to view (navigations)
        return view('home.conference', compact('conferences'));   
        
    }

     /**
    * Show Ujay Campus FM page
    *
    * @return \Illuminate\Http\Response
    */
    public function showUjayCampusFm() 
    {
        $page =  Pages::whereOwner('ujay-campus-fm')->where('visible', '=', 1)->where('weight', '=', 1)->first();
        $pages = Pages::whereCategory('special')->where('visible', '=', 1)->where('weight', '=', 1)->get();
        return view('page.ujay_campus_fm', compact('page', 'pages'));
    }

    /**
    * Show showUjayMagazine page
    *
    * @return \Illuminate\Http\Response
    */
    public function showUjayMagazine() 
    {
        $page =  Pages::whereOwner('ujay-magazine')->where('visible', '=', 1)->where('weight', '=', 1)->first();
        $pages = Pages::whereCategory('special')->where('visible', '=', 1)->where('weight', '=', 1)->get();
        return view('page.ujay_magazine', compact('page','pages'));
    } 

    /**
    * Show showUjayLiveStreaming page
    *
    * @return \Illuminate\Http\Response
    */
    public function showUjayLiveStreaming() 
    {
        // $page = "Test";
        $page =  Pages::whereOwner('ujay-live-streaming')->where('visible', '=', 1)->where('weight', '=', 1)->first();
        $pages = Pages::whereCategory('special')->where('visible', '=', 1)->where('weight', '=', 1)->get();
        return view('page.ujay_live_streaming', compact('page', 'pages'));
    }  

     /**
    * Show showUjayLiveStreaming page
    *
    * @return \Illuminate\Http\Response
    */
    public function showUjaySports() 
    {
        // $title = "University of Jos Sports";
        // $page = "test";
        $page =  Pages::whereOwner('ujay-sports')->where('visible', '=', 1)->where('weight', '=', 1)->first();
        $pages = Pages::whereCategory('special')->where('visible', '=', 1)->where('weight', '=', 1)->get();

        $title = "University of Jos Student Union Government Day";
        return view('page.ujay_sports', compact('page','title','pages'));
    }  


    /**
    * Show showUjayLiveStreaming page
    *
    * @return \Illuminate\Http\Response
    */
    public function showMissUjay() 
    {
        // $page = "Test";
        // return view('page.miss_ujay', compact('page'));

         // try {   
 
            $page = Pages::whereOwner('miss-ujay')->where('visible', '=', 1)->where('weight', '=', 1)->first();
            $pages = Pages::whereCategory('special')->where('visible', '=', 1)->where('weight', '=', 1)->get();
            $title = "University of Jos Student Union Government Day";
            // $page = "Test";

            // return view('admin.dashboard.pages.index', compact('getPages')); 
            // dd($page->content);
            return view('page.miss_ujay', compact('page', 'title', 'pages'));      
            
        // } catch(Exception $e) {

            // return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        // }
    }  


    /**
    * Show showUjayLiveStreaming page
    *
    * @return \Illuminate\Http\Response
    */
    public function showSugDay() 
    {
        
        // try {   
 
            $page = Pages::whereOwner('sug')->where('visible', '=', 1)->where('weight', '=', 1)->first();
            $pages = Pages::whereCategory('special')->where('visible', '=', 1)->where('weight', '=', 1)->get();
            $title = "University of Jos Student Union Government Day";
            // $page = "Test";

            // return view('admin.dashboard.pages.index', compact('getPages')); 
            // dd($page->content);
            return view('page.sug_day', compact('page', 'title', 'pages'));      
            
        // } catch(Exception $e) {

            // return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        // }
        
    } 

    /**
    * Show showUjayLiveStreaming page
    *
    * @return \Illuminate\Http\Response
    */
    // public function megalinks() 
    // {
        
    //         $pages = Pages::whereCategory('special')->where('visible', '=', 1)->where('weight', '=', 1)->get();
    //         return view('partials.index.megalinks', compact('pages'));      
            
    // }    

     /**

     * Show the application layout

     *

     * @return \Illuminate\Http\Response

     */

    // public function myform()

    // {

    //     $faculties = DB::table("faculties")->lists("name","id");

    //     return view('admin.dashboard.pages.myform',compact('faculties'));

    // }

    public function myform()
    {
    $faculties = DB::table("faculties")->lists("name","id");
    $departments = $this->myformAjax(Input::get('faculty'));
    // return view('myform',compact('states',' selectedCity'));
    return view('admin.dashboard.pages.myform', compact('faculties', 'departments'));

    }


    /**

     * Get Ajax Request and restun Data

     *

     * @return \Illuminate\Http\Response

     */

    public function myformAjax($id)

    {

        $departments = DB::table("departments")

                    ->where("faculties_id",$id)

                    ->lists("name","id");

        return json_encode($departments);

    }
}
