<?php

namespace Web\Http\Controllers;

use Illuminate\Http\Request;

use Web\Http\Requests;
use Web\News;

class NewController extends Controller
{

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function indexNews()
    // {
    //     try {   

    //         $indexNews = News::paginate(3);
    
    //         return view('partials.index.news_tab', compact('indexNews'));       
            
    //     } catch(Exception $e) {

    //         return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
    //     }
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {   

            $getNews = News::orderBy('created_at')->get();
    
            return view('admin.dashboard.news.index', compact('getNews'));       
            
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
        return view('admin.dashboard.news.create');
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
                    'title'         => 'required|min:3|max:100',
                    'itype'         => 'required',
                    'latest_news'   => 'required',
                    'content'       => 'required',
                    'has_image'     => 'required',
                    'position'      => 'required',
                    'level'         => 'required',
                    'visible'       => 'required',
                    'author'        => 'required|min:3|max:100',
                    'archived'      => 'required',
                    'verified'      => 'required',
                    'deleted'       => 'required',

              ]);

            // dd($v);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {

                // Replace space with a slash for slug
                $slug = str_replace(" ", "-", $request->title);

                $news               = new News;
                $news->title        = $request->title;
                $news->display_line = $request->title;
                $news->slug         = $slug;
                $news->itype        = $request->itype;
                $news->latest_news  = $request->latest_news;
                $news->content      = $request->content;
                $news->has_image    = $request->has_image;              
                $news->position     = $request->position;
                $news->level        = $request->level;
                $news->visible      = $request->visible;
                $news->author       = $request->author;
                $news->archived     = $request->archived;
                $news->verified     = $request->verified;              
                $news->deleted      = $request->deleted;
                                  
                if( $news->save() ) {

                    // Return a message to the User
                    $msg = 'The News [' . $news->title . '] was successfully created. ';
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
         $news = News::whereSlug($slug)->first();
        
        return view('admin.dashboard.news.show', compact('news'));
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
        try {
            $v = validator()->make($request->all(), [
                    'title'         => 'required|min:3|max:100',
                    'itype'         => 'required',
                    'latest_news'   => 'required',
                    'content'       => 'required',
                    'has_image'     => 'required',
                    'position'      => 'required',
                    'level'         => 'required',
                    'visible'       => 'required',
                    'author'        => 'required|min:3|max:100',
                    'archived'      => 'required',
                    'verified'      => 'required',
                    'deleted'       => 'required',

              ]);

           // dd($v);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {

                // Replace space with a slash for slug
               
                 // dd($request);
                $news               = News::whereSlug($slug)->first();
                // dd($news);
                $news->title        = $request->title;
                $news->display_line = $request->title;
                $news->slug         = $slugs = str_replace(" ", "-", $request->title);
                $news->itype        = $request->itype;
                $news->latest_news  = $request->latest_news;
                $news->content      = $request->content;
                $news->has_image    = $request->has_image;              
                $news->position     = $request->position;
                $news->level        = $request->level;
                $news->visible      = $request->visible;
                $news->author       = $request->author;
                $news->archived     = $request->archived;
                $news->verified     = $request->verified;              
                $news->deleted      = $request->deleted;
                                  
                if( $news->update() ) {

                    // Return a message to the User
                    $msg = 'The News Item titled [ ' . $news->title . ' ] was successfully updated. ';
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
