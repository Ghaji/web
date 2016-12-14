<?php

namespace Web\Http\Controllers;

use Illuminate\Http\Request;

use Web\Http\Requests;
use Web\Pages;
use Web\Navigations;
use Web\SubNavigations;
use Web\Faculties;
use Web\Departments;
use Web\Programmes;
use Web\News;

class PageController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // This is to get the list of all pages 
        try {   
 
            $getPages = Pages::where('visible', '=', 1)->where('weight', '=', 1)->orderBy('position')->get();

            return view('admin.dashboard.pages.index', compact('getPages'));       
            
        } catch(Exception $e) {

            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
    }

    // Add methods to add, edit, delete and show pages

    // create method to create new pages
    // submit the form to this method
    public function create()
    {
        // $inputs = Input::all();
        // $page = Page::create(array(...));
        $main_menus = Navigations::whereVisible(1)->whereHas_sub_nav(0)->get();
        $sub_menus  = SubNavigations::whereVisible(1)->whereHasChildren(0)->whereWeight(1)->get();

        return view('admin.dashboard.pages.create', compact('main_menus', 'sub_menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
             // dd($request);
            $rules = ['s1' => 'required'];

            if($request->s1 == 1){
                # code...
                $rules += ['slug' => 'required'];

            }elseif ($request->s1 == 2) {
                # code...
                $rules += ['slug1' => 'required'];

            }else {
                # code...
                $rules += ['slug2' => 'required'];

            }
            // else{
                
            //     // $rules += ['slug' => ''];
            // }

            $rules += [
                    'category'       => 'required',
                    'owner'          => 'required',
                    'title'          => 'required',
                    'name'           => 'required',
                    'position'       => 'required',
                    'content'        => 'required',
                    'visible'        => 'required',
                    'weight'         => 'required',
                    // 'icon'           => 'required',

              ];

            if ($request->publish == 1 ) {
                #  Making sure if password change was selected it's being validated
                $rules += [
                'publisher_name'  => 'required|min:6',
                'published_date'  => 'required',
                
                ];
            } else {
                # code...
            }

            $v = validator()->make($request->all(), $rules);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {

                $page                 = new Pages;
                $page->s1             = $request->s1;
                $page->category       = $request->category;
                $page->owner          = $request->owner;
                $page->title          = $request->title;
                $page->name           = $request->name;
                // $page->slug           = $slug_page = str_replace(" ", "-", $request->name);
                if($request->s1 == 1){
                    # code...
                    $page->slug = $slug_page = str_replace(" ", "-", $request->name);
                }elseif ($request->s1 == 2) {
                    # code...
                    $page->slug = $slug_page = str_replace(" ", "-", $request->name);
                }else {
                    # code...
                    $page->slug = $request->slug2;
                }
                $page->position       = $request->position;
                $page->content        = $request->content;
                $page->visible        = $request->visible;
                $page->weight         = $request->weight; 
                $page->publish        = $request->publish;              
                $page->publisher_name = $request->publisher_name;
                $page->published_date = $request->published_date;
                                  
                if( $page->save() ) {

                    // Return a message to the User
                    $msg = 'Page [' . $page->name . '] was successfully created. ';
                    return redirect()->back()->withMessage($msg)->withMessageType('success')->with('page', $page);

                }
            }
        } catch(Exception $e) {
            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = Pages::whereSlug($slug)->first();
        $main_menus = Navigations::whereVisible(1)->whereHas_sub_nav(1)->get();
        $sub_menus    = SubNavigations::whereVisible(1)->get();
        
        return view('admin.dashboard.pages.show', compact('sub_menus', 'main_menus', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        try {
                // dd($request->all());
                $rules = ['s1' => 'required'];

                if($request->s1 == 1){
                    # code...
                    $rules += ['slug' => 'required'];

                }elseif ($request->s1 == 2) {
                    # code...
                    $rules += ['slug1' => 'required'];

                }else {
                    # code...
                    $rules += ['slug2' => 'required'];

                }
                // else{
                //     $rules = ['slug' => 'required'];

                // }

                $rules += [
                        'category'           => 'required',
                        'owner'           => 'required',
                        'title'       => 'required',
                        'name'           => 'required',
                        'position'       => 'required',
                        'content'        => 'required',
                        'visible'        => 'required',
                        'weight'         => 'required',
                        // 'icon'           => 'required',

                  ];

                if ($request->publish == 1 ) {
                    #  Making sure if password change was selected it's being validated
                    $rules += [
                    'publisher_name'  => 'required|min:6',
                    'published_date'  => 'required',
                    
                    ];
                } else {
                    # code...
                }

                $v = validator()->make($request->all(), $rules);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {

                // Replace space with a slash for slug
               
                $page                 = Pages::whereSlug($slug)->first();
                $page->s1             = $request->s1;
                $page->category       = $request->category;
                $page->owner       = $request->owner;
                $page->title       = $request->title;
                $page->name           = $request->name;

                if($request->s1 == 1){
                    # code...
                    $page->slug = $request->slug;
                }elseif ($request->s1 == 2) {
                    # code...
                    $page->slug = $request->slug1;
                }else {
                    # code...
                    $page->slug = $request->slug2;
                }
                
                $page->position       = $request->position;
                $page->content        = $request->content;
                $page->visible        = $request->visible;
                $page->weight         = $request->weight;
                $page->publish        = $request->publish;              
                $page->publisher_name = $request->publisher_name;
                $page->published_date = $request->published_date;
                                  
                if( $page->update() ) {

                    // Return a message to the User
                    $msg = 'The Page [ ' . $page->name . ' ] was successfully updated. ';
                    return redirect()->back()->withMessage($msg)->withMessageType('success');

                }
            }
        } catch(Exception $e) {
            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     * Show a page by slug
     *
     * @param  varchar  $slug
     * @return \Illuminate\Http\Response
     */
    public function showPages($slug)
    {
        $subNavigation = SubNavigations::whereSlug($slug)->whereHasChildren(1)->first();
        $facultyNavigation = Faculties::whereSlug($slug)->first();


        if ( $subNavigation ) {
        	// $page = Pages::whereSlug($slug)->first();

	        // if ( $page == null ) {
	        //     return view('error.404')
	        //         ->with('msg', '<p class="alert red white-text margin-top-10">This Page does not exist.</p>');
	        // }

            // $list = Faculties::whereCategoryName($subNavigation->slug)->get();

            $list = Faculties::whereCategoryName($subNavigation->slug)->with(['Departments' => function($query1){

                $query1->addSelect(['faculties_id', 'name', 'slug', 'description'])->orderBy('name', 'asc');

            }])->where('visible', '=', 1)->orderBy('name')->get();
        	
	        return view('page.list', compact('list', 'subNavigation'))->with('subNav', $subNavigation->slug);


        }elseif ($facultyNavigation) {
            # code...
            $msg = "Faculty page";

            // $faculty = Faculties::whereslug($slug)->first();
            // $departmentLists = Faculties::whereId($facultyName->id)->get();
            $faculty = Faculties::whereSlug($slug)->with(['departments' => function($query1){

                $query1->addSelect(['faculties_id', 'name', 'slug', 'description'])->where('visible', '=', 1)->orderBy('name', 'asc');

            }])->where('position', '=', 0)->where('visible', '=', 1)->orderBy('name')->first();

            $news           = News::whereItype(1)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $events         = News::whereItype(2)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $jobs           = News::whereItype(3)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $forms          = News::whereItype(4)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $adverts        = News::whereItype(5)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $lectures       = News::whereItype(6)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $conferences    = News::whereItype(7)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $latests        = News::whereLatest_news(1)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();              

            return view('faculty.home', compact('news', 'events', 'jobs', 'forms', 'adverts', 'lectures', 'conferences','latests' ,'faculty'))->with('msg', $msg);

            // return view('faculty.home', compact('faculty'))->with('msg', $msg);


        } else {

        	$page = Pages::whereSlug($slug)->first();

	        if ( $page == null ) {
	            return view('error.404')
	                ->with('msg', '<p class="alert red white-text margin-top-10">This Page does not exist.</p>');
	        }

	        return view('page.single', compact('page'));
        }   
    }

    /**
     * Display the Department home page.
     * 
     *
     * @param  varchar  $departmentSlug
     * @return \Illuminate\Http\Response
     */
    public function showDepartment($departmentSlug)
    {
        $department = Departments::whereSlug($departmentSlug)->with(['programmes'=> function($query1){

            $query1->addSelect(['departments_id', 'name', 'slug', 'description','programme_category_id'])->where('programme_category_id','=',1);
        
        }])->where('position', '=', 0)->where('visible', '=', 1)->orderBy('name')->first();

        if( $department ) {

            return $department;

        } else { 

            return false; 
        }
    }

    /**
     * Display the Faculty Pages.
     *
     * @param  varchar  $faculty
     * @param  varchar  $slug
     * @return \Illuminate\Http\Response
     */
    public function showFacultyPages($faculty, $slug)
    {
        $faculty = Faculties::whereSlug($faculty)->first();
        
        if( $department = $this->showDepartment($slug) ) {

            // department home page for rendering
            return view('department.home', compact('faculty','department'));

        }  else {
            
            // search for page with category faculty
            $page = Pages::whereSlug($slug)->first();

            if ( $page == null ) {
                return view('error.404')
                    ->with('msg', '<p class="alert red white-text margin-top-10">This Page does not exist.</p>');
            }

            return view('faculty.single', compact('faculty','page'));
        } 
    }

     /**
     * Display the Programme home page.
     * 
     *
     * @param  varchar  $programmeSlug
     * @return \Illuminate\Http\Response
     */
    public function showProgramme($programmeSlug)
    {
        $programme = Programmes::whereSlug($programmeSlug)->where('position', '=', 0)->where('visible', '=', 1)->orderBy('name', 'asc')->first();

        if( $programme ) {
            return $programme;
        }  else { return false; }
    }

    /**
     * Display the Department Pages.
     *
     * @param  varchar  $faculty
     * @param  varchar  $slug
     * @return \Illuminate\Http\Response
     */
    public function showDepartmentPages($faculty, $department, $slug)
    {
        $faculty = Faculties::whereSlug($faculty)->first();
        $department = Departments::whereSlug($department)->first();
        
        if( $programme = $this->showProgramme($slug) ) {
            return view('programme.home', compact('faculty','department', 'programme'));
           
        }  else {
            // search for page with category department
            $page = Pages::whereSlug($slug)->first();

            if ( $page == null ) {
                return view('error.404')
                    ->with('msg', '<p class="alert red white-text margin-top-10">This Page does not exist.</p>');
            }

            return view('department.single', compact('faculty', 'department', 'page'));
        } 
    }


    /**
     * Display the specified resource.
     * Create Faculty Route
     *
     * @param  varchar  $slug
     * @return \Illuminate\Http\Response
     */
    public function Library(){

        $slug = 'library';
        $faculty = Faculties::whereSlug($slug)->first();

        $news           = News::whereItype(1)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
        $events         = News::whereItype(2)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
        $jobs           = News::whereItype(3)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
        $forms          = News::whereItype(4)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
        $adverts        = News::whereItype(5)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
        $lectures       = News::whereItype(6)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
        $conferences    = News::whereItype(7)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
        $latests        = News::whereLatest_news(1)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();              

        return view('library.home', compact('news', 'events', 'jobs', 'forms', 'adverts', 'lectures', 'conferences','latests' ,'faculty'));  
        
    }


    /**
     * Display the specified resource.
     * Create Faculty Route
     *
     * @param  varchar  $slug
     * @return \Illuminate\Http\Response
     */
    public function showLibrary($slug){

        $facultyNavigation = Faculties::whereSlug($slug)->first();

        if($facultyNavigation){

            $faculty = Faculties::whereSlug($slug)->with(['departments' => function($query1){

                $query1->addSelect(['faculties_id', 'name', 'slug', 'description'])->where('visible', '=', 1)->orderBy('name', 'asc');

            }])->where('position', '=', 0)->where('visible', '=', 1)->orderBy('name')->first();

            // dd($faculty);

            return view('library.home', compact('faculty'))->with('msg', $msg);


        } else {

            $page = Pages::whereSlug($slug)->first();

            if ( $page == null ) {
                return view('error.404')
                    ->with('msg', '<p class="alert red white-text margin-top-10">This Page does not exist.</p>');
            }

            return view('page.single', compact('page'));
        } 

        // return view('library.single');

    }

    /**
     * Display the specified resource.
     * Create Faculty Route
     *
     * @param  varchar  $slug
     * @return \Illuminate\Http\Response
     */
    public function createFaculty(){

        $faculties = Faculties::whereVisible(1)->whereWeight(1)->get();
        $sub_menus  = SubNavigations::whereVisible(1)->whereHasChildren(0)->whereWeight(1)->get();

        return view('admin.dashboard.pages.createFaculty', compact('faculties', 'sub_menus'));

    }

    /**
     * Display the specified resource.
     * Create Department Route
     *
     * @param  varchar  $slug
     * @return \Illuminate\Http\Response
     */
    public function createDepartment(){

        $main_menus = Navigations::whereVisible(1)->whereHas_sub_nav(0)->get();
        $sub_menus  = SubNavigations::whereVisible(1)->whereHasChildren(0)->whereWeight(1)->get();

        return view('admin.dashboard.pages.createDepartment', compact('main_menus', 'sub_menus'));

    }


    /**
     * Display the specified resource.
     * Create Department Route
     *
     * @param  varchar  $slug
     * @return \Illuminate\Http\Response
     */
    public function createSpecialPage(){

        $main_menus = Navigations::whereVisible(1)->whereHas_sub_nav(0)->get();
        $sub_menus  = SubNavigations::whereVisible(1)->whereHasChildren(0)->whereWeight(1)->get();

        return view('admin.dashboard.pages.createSpecialPage', compact('main_menus', 'sub_menus'));

    }


}
