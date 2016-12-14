<?php

namespace Web\Http\Controllers;

use Illuminate\Http\Request;

use Web\Http\Requests;
use Web\SubNavigations;
use Web\Navigations;

class SubNavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {   

            // $getSubNavigations = SubNavigations::orderBy('position')->get(); 

            $getSubNavigations = SubNavigations::with(['navigation' => function($q){

                $q->addSelect(['id', 'name', 'slug']);

            }])->where('visible', '=', 1)->where('weight', '=', 1)->orderBy('position')->get();

            // dd($getSubNavigations);

            return view('admin.dashboard.submenu.index', compact('getSubNavigations'));       
            
        } catch(Exception $e) {

            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_menus = Navigations::whereVisible(1)->whereHas_sub_nav(1)->get();
        return view('admin.dashboard.submenu.create')->with('main_menus', $main_menus);
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
            $v = validator()->make($request->all(), [
                    'navigations_id' => 'required',
                    'has_children'   => 'required',
                    'name'           => 'required',
                    'position'       => 'required',
                    'content'        => 'required',
                    'visible'        => 'required',
                    'weight'         => 'required',
                    // 'icon'           => 'required',

              ]);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {

                $slug = str_replace(" ", "-", $request->name);

                $subNavigation                 = new SubNavigations;
                $subNavigation->navigations_id = $request->navigations_id;
                $subNavigation->has_children   = $request->has_children;
                $subNavigation->name           = $request->name;
                $subNavigation->slug           = $slug;
                $subNavigation->position       = $request->position;
                $subNavigation->content        = $request->content;
                $subNavigation->visible        = $request->visible;
                $subNavigation->weight         = $request->weight;              
                // $subNavigation->icon           = $request->icon;
                                  
                if( $subNavigation->save() ) {

                    // Return a message to the User
                    $msg = 'Sub-menu [' . $subNavigation->name . '] was successfully created. ';
                    return redirect()->back()->withMessage($msg)->withMessageType('success');

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
        $menus = Navigations::whereVisible(1)->whereHas_sub_nav(1)->get();
        $submenu    = SubNavigations::whereSlug($slug)->first();
        
        return view('admin.dashboard.submenu.show', compact('submenu', 'menus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // dd($request->all());
        try {
            $v = validator()->make($request->all(), [
                    'navigations_id' => 'required',
                    'has_children'   => 'required',
                    'name'           => 'required',
                    'position'       => 'required',
                    'content'        => 'required',
                    'visible'        => 'required',
                    'weight'         => 'required',
                    // 'icon'           => 'required',

              ]);
            // dd($v);
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {

                // $slug = str_replace(" ", "-", $request->name);

                $subNavigation                 = SubNavigations::whereSlug($slug)->first();
                // dd($subNavigation);

                $subNavigation->navigations_id = $request->navigations_id;
                $subNavigation->has_children   = $request->has_children;
                $subNavigation->name           = $request->name;
                $subNavigation->slug           = $slugs = str_replace(" ", "-", $request->name);
                $subNavigation->position       = $request->position;
                $subNavigation->content        = $request->content;
                $subNavigation->visible        = $request->visible;
                $subNavigation->weight         = $request->weight;              
                // $subNavigation->icon           = $request->icon;


                                  
                if( $subNavigation->update() ) {

                    // Return a message to the User
                    $msg = 'Sub-menu [' . $subNavigation->name . '] was successfully updated. ';
                    return redirect()->back()->withMessage($msg)->withMessageType('success');

                }
            }
        } catch(Exception $e) {
            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
