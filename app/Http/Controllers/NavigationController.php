<?php

namespace Web\Http\Controllers;

use Illuminate\Http\Request;

use Web\Http\Requests;
use Web\Navigations;
use Web\SubNavigations;
use Web\Pages;
use Web\News;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Validator;
// use Web\Http\Controllers\Navigations;

class NavigationController extends Controller
{
    // This is to manage all controller request

    public function mainIndex(){

    	try {   

            $news           = News::whereItype(1)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $events         = News::whereItype(2)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $jobs           = News::whereItype(3)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $forms          = News::whereItype(4)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $adverts        = News::whereItype(5)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $lectures       = News::whereItype(6)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();
            $conferences    = News::whereItype(7)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();

            $latests        = News::whereLatest_news(1)->whereVisible(1)->whereVerified(1)->wherePublished(1)->get();

            $sug_day        = Pages::whereCategory('special')->whereOwner('sug')->where('visible', '=', 1)->where('weight', '=', 1)->first();
            $campus_fm      = Pages::whereCategory('special')->whereOwner('ujay-campus-fm')->where('visible', '=', 1)->where('weight', '=', 1)->first();
            $miss_ujay      = Pages::whereCategory('special')->whereOwner('miss-ujay')->where('visible', '=', 1)->where('weight', '=', 1)->first();
            $live_streaming = Pages::whereCategory('special')->whereOwner('ujay-live-streaming')->where('visible', '=', 1)->where('weight', '=', 1)->first();
            $magazine       = Pages::whereCategory('special')->whereOwner('ujay-magazine')->where('visible', '=', 1)->where('weight', '=', 1)->first();
            $sports         = Pages::whereCategory('special')->whereOwner('ujay-sports')->where('visible', '=', 1)->where('weight', '=', 1)->first();
    			
            // return the variable to view (navigations)
            // dd($conferences);
    		return view('home.index', compact('news', 'events', 'jobs', 'forms', 'adverts', 'lectures', 'conferences','latests' ,'sug_day' ,'campus_fm' ,'miss_ujay' ,'live_streaming' ,'magazine' ,'sports'));         
            
        } catch(Exception $e) {

            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }

    }

    public function index(){

        try {   

            $getNavigations = Navigations::orderBy('position')->get();  

            return view('admin.dashboard.menu.index', compact('getNavigations'));       
            
        } catch(Exception $e) {

            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }

    }


    public function create()
    {
        return view('admin.dashboard.menu.create');
    }

    public function store(Request $request)
    {
        try {
            $v = validator()->make($request->all(), [
                    'name'              => 'required',
                    'category'          => 'required',
                    'position'          => 'required',
                    'has_sub_nav'       => 'required',
                    'navigation_type'   => 'required',
                    'visible'           => 'required',
                    'weight'            => 'required',

              ]);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {
                $navigation                     = new Navigations;
                $navigation->name               = $request->name;
                $navigation->slug               = $slugs = str_replace(" ", "-", $request->name);
                $navigation->category           = $request->category;
                $navigation->position           = $request->position;
                $navigation->has_sub_nav        = $request->has_sub_nav;
                $navigation->navigation_type    = $request->navigation_type;
                $navigation->visible            = $request->visible;
                $navigation->weight             = $request->weight;              
                $navigation->icon               = $request->icon;
                                  
                if( $navigation->save() ) {

                    // Return a message to the User
                    $msg = 'Menu [' . $navigation->name . '] was successfully created. ';
                    return redirect()->back()->withMessage($msg)->withMessageType('success');

                }
            }
        } catch(Exception $e) {
            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
        
    }

    public function show($slug)
    {
        $menu = Navigations::whereSlug($slug)->first();
        
        return view('admin.dashboard.menu.show', compact('menu'));
    }
   

    public function update(Request $request, $slug)
    {

        try {
            $v = validator()->make($request->all(), [
                    'name'              => 'required',
                    'category'          => 'required',
                    'position'          => 'required',
                    'has_sub_nav'       => 'required',
                    'navigation_type'   => 'required',
                    'visible'           => 'required',
                    'weight'            => 'required',

              ]);

    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {
                $menu                     = Navigations::whereSlug($slug)->first();
                $menu->name               = $request->name;
                $menu->slug               = $slugs = str_replace(" ", "-", $request->name);
                $menu->category           = $request->category;
                $menu->position           = $request->position;
                $menu->has_sub_nav        = $request->has_sub_nav;
                $menu->navigation_type    = $request->navigation_type;
                $menu->visible            = $request->visible;
                $menu->weight             = $request->weight;              
                $menu->icon               = $request->icon;
                                  
                if( $menu->update() ) {

                    // Return a message to the User
                    $msg = 'Menu [' . $menu->name . '] was successfully updated. ';
                    return redirect()->back()->withMessage($msg)->withMessageType('success');
                    // return view('menu.index')->withMessage($msg)->withMessageType('success')->with('menu', $menu);

                }
            }
        } catch(Exception $e) {
            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
        
    }

    public function postUpdate($id)
    {
        // $navigation = Navigation::find($id);
        // $rules = ["unitprice" => "required|numeric"];
        // if ($product->name != Input::get('name'))
        //     $rules += ['name' => 'required|unique:products'];
        // $validator = Validator::make(Input::all(), $rules);
        // if ($validator->fails()) {
        //     return array(
        //         'fail' => true,
        //         'errors' => $validator->getMessageBag()->toArray()
        //     );
        // }
        // $product->name = Input::get('name');
        // $product->unitprice = Input::get('unitprice');
        // $product->save();
        // return ['url' => 'product/list'];
    }


    public function destroy($slug)
    {
        Navigations::destroy($slug);
        return Redirect('menu.index');
    }

    //  public function show($page) {
    //     $page = Pages::whereSlug($page)->first();

    //     if ( $page == null ) {
    //         return view('error.404')
    //             ->with('msg', '<p class="alert red white-text margin-top-10">This Page does not exist.</p>');
    //     }

    //     return view('page.single')
    //             ->with('page', $page);
    // }

    public function sideNavIndex(){

        try {   

            $getSideNavs = Navigations::whereCategory('secondary')->orderBy('position')->get();  

            return view('admin.dashboard.menu.index', compact('getSideNavs'));       
            
        } catch(Exception $e) {

            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }

    }
}
