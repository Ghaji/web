<?php

namespace Web\Http\Controllers;

use Illuminate\Http\Request;

use Web\Http\Requests;
use Web\Faculties;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try { 

            $facs = Faculties::orderBy('name','ASC')->get();
              return view('admin.dashboard.faculties.index', compact('facs'));

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
        return view('admin.dashboard.faculties.create');
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

            $rules = [
                    'category_name'  => 'required',
                    'child_type'     => 'required',
                    'name'           => 'required',
                    'code'           => 'required',
                    'image'          => 'required',
                    'description'    => 'required',
                    'position'       => 'required',
                    'visible'        => 'required',
                    'weight'         => 'required',
              ];

            $v = validator()->make($request->all(), $rules);

            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {

                $faculties                 = new Faculties;
                $faculties->category_name  = $request->category_name;
                $faculties->child_type     = $request->child_type;
                $faculties->name           = $request->name;
                $faculties->slug           = $slug_fac = str_replace(" ", "-", strtolower($request->name));
                $faculties->code           = $request->code;
                $faculties->image        = $request->image;
                $faculties->position       = $request->position;
                $faculties->description        = $request->description;
                $faculties->visible        = $request->visible;
                $faculties->weight         = $request->weight; 
                                  
                if( $faculties->save() ) {

                    // Return a message to the User
                    $msg = 'Faculty [' . $faculties->name . '] was successfully created. ';
                    return redirect()->back()->withMessage($msg)->withMessageType('success')->with('faculties', $faculties);

                }

            }
            
        } catch (Exception $e) {
            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faculty = Faculties::whereId($id)->first();        
        return view('admin.dashboard.faculties.show', compact('faculty'));
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
    public function update(Request $request, $id)
    {
        //
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
