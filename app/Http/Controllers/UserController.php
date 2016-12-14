<?php

namespace Web\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Validator;

use Web\Http\Requests;
use Web\User;
use Web\SecretQuestions;
use Web\Http\Controllers\Controller;
use Mail;
use Carbon\Carbon;
use Auth;
use Image;
use Storage;
use File;
use Web\Role;
use DB;
use Hash;


class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try { 

            // $getUsers = User::get(["id","surname","firstname","othername","username","last_login","phone_number","email","slug","visible","suspended"]);
            $getUsers = User::orderBy('id','DESC')->paginate(5);
              return view('admin.dashboard.users.index',compact('getUsers'))
                  ->with('i', ($request->input('page', 1) - 1) * 5);
            // return view('admin.dashboard.users.index', compact('getUsers'));

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
        $roles = Role::lists('display_name','id')->all();
        $secret_questions = SecretQuestions::whereVisible(1)->get();
        return view('admin.dashboard.users.create', compact('roles', 'secret_questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request->all());
        try {
            $v = validator()->make($request->all(), [
                    'unique_number'       => 'required|min:4|max:4|unique:users',
                    'is_admin_user'       => 'required',
                    'username'            => 'required|min:3|max:100|unique:users',
                    'surname'             => 'required|min:3|max:150',
                    'firstname'           => 'required|min:3|max:150',
                    'othername'           => 'min:3|max:150',
                    'email'               => 'required|Email|min:6|max:150|unique:users',
                    'phone_number'        => 'required|min:7|max:15|unique:users',
                    'address'             => 'required|min:10|max:255',
                    'secret_question_id'  => 'required',
                    'secret_answer'       => 'required_unless:secret_question_id,1',
                    'visible'             => 'required',
                    'suspended'           => 'required',
                    'password'            => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
                    'roles'               => 'required',
              ]);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {
                $user                       = new User;
                $user->admin_id             = auth()->id();
                $user->unique_number        = $request->unique_number;
                $user->is_admin_user        = $request->is_admin_user;
                $user->username             = $request->username;
                $user->surname              = $request->surname;
                $user->firstname            = $request->firstname;              
                $user->othername            = $request->othername;
                $user->email                = $request->email;
                $user->phone_number         = $request->phone_number;
                $user->address              = $request->address;
                $user->slug                 = $request->username;
                $user->secret_question_id   = $request->secret_question_id;
                $user->secret_answer        = $request->secret_answer;
                $user->visible              = $request->visible; //normal user
                $user->suspended            = $request->suspended; //weight 1
                $user->password             = bcrypt($request->password);
                // $user->last_login           = Carbon::now();
                
                      
                if( $user->save() ) {

                  foreach ($request->roles as $key => $value) {
                    $user->attachRole($value);
                  }
                    // Send User an email with set password link
                    $msg = 'User [' . $user->username . '] was successfully created. An email was sent to [' . $user->email . '] providing a set password link.';
                    return redirect()->back()->withMessage($msg)->withMessageType('success');

                    //dd($user);
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
    public function show($id)
    {
        $loggedInUser = User::whereId($id)->first();
        $roles = Role::lists('display_name','id');
        $userRole = $loggedInUser->roles->lists('id','id')->toArray();
        
        return view('admin.dashboard.users.show', compact('loggedInUser','roles','userRole'));
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
       //  if ( $user->update( $request->all() ) ) {
       //  return redirect()->back()->withMessage('User Updated Successfully')->withMessageType('success');
       // }
      // dd($request->all());
        try {
            $v = validator()->make($request->all(), [
                    'unique_number' => 'required|min:4|max:4',
                    'is_admin_user' => 'required',
                    
                    'username'      => 'required|min:3|max:100',
                    'surname'       => 'required|min:3|max:150',
                    'firstname'     => 'required|min:3|max:150',
                    'othername'     => 'min:3|max:150',
                    'email'         => 'required|Email|min:6|max:150',
                    'phone_number'  => 'required|min:7|max:15',
                    'address'       => 'required|min:10|max:255',
                    // 'secret_question_id' =>'required',
                    // 'secret_answer'=>'required',
                    'visible' => 'required',
                    'suspended' => 'required',
                    // 'password'=>'required|min:6',
                    'roles' => 'required',
              ]);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {

                $user                       = User::whereId($id)->first();
                $user->admin_id             = auth()->id();
                $user->unique_number        = $request->unique_number;
                $user->is_admin_user        = $request->is_admin_user;
                $user->username             = $request->username;
                $user->surname              = $request->surname;
                $user->firstname            = $request->firstname;              
                $user->othername            = $request->othername;
                $user->email                = $request->email;
                $user->phone_number         = $request->phone_number;
                $user->address              = $request->address;
                $user->slug                 = $request->username;
                // $user->secret_question_id   = $request->secret_question_id;
                // $user->secret_answer        = $request->secret_answer;
                $user->visible              = $request->visible;    // visible
                $user->suspended            = $request->suspended;  // suspended 

                if($request->change == 1){
                    $user->password         = bcrypt($request->password);
                }else{
                    $user->password         = $user->password;
                }
                
                // $user->last_login           = Carbon::now();
                      
                if ( $user->update() ) {

                    DB::table('role_user')->where('user_id',$id)->delete();
        
                    foreach ($request->roles as $key => $value) {
                        $user->attachRole($value);
                    }

                    return redirect()->back()->withMessage('User Updated Successfully')->withMessageType('success');
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
    public function destroy(Request $request, $id)
    {
        // $userDel = User::Find($id);

        // if($userDel->delete($userDel->id)){

            // return redirect()->back()->withMessage('The User Deleted Successfully')->withMessageType('success');
            // return redirect()
            //     ->route('users.index')
            //     ->withMessage('The User Deleted Successfully')
            //     ->withMessageType('success');
            return view('admin.dashboard.users.index', compact('loggedInUser'));
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendMailVerification(Request $request, $id)
    {
        $user = User::FindOrFail($id);

        Mail::send('emails.sendVerification', ['user' => $user], function($message) use ($user){

            $message->from('WebsiteAdmin@unijos.edu.ng', 'University of Jos Website Application');
            $message->to($user->email, $user->firstname . ' ' . $user->surname)->subject('Your New account from Admin@unijos!');

        });

        // if($userDel->delete($userDel->id)){

            // return redirect()->back()->withMessage('The User Deleted Successfully')->withMessageType('success');
            // return redirect()
            //     ->route('users.index')
            //     ->withMessage('The User Deleted Successfully')
            //     ->withMessageType('success');
            return view('admin.dashboard.users.index', compact('loggedInUser'));
        // }
    }

    public function avatar(){
        return view('admin.dashboard.users.avatar', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

        try {

            $rules = ['avatar' => 'mimes:jpeg,bmp,png,gif,svg,jpg'];

            $v = validator()->make($request->all(), $rules);
    
              if( $v->fails() ) {
                  return redirect()->back()->withInput()->withErrors($v);
              } else {

                  $path = public_path('/uploads/avatars/');

                  // Handle the user upload of avatar
                  if($request->hasFile('avatar')){
                      $avatar = $request->file('avatar');
                      $filename = time() . '.' . $avatar->getClientOriginalExtension();
                      Image::make($avatar)->resize(300, 300)->save( $path . $filename  );

                      $user = Auth::user();
                      if( File::delete($path . $user->avatar ) ) {
                        $user->avatar = $filename;
                        $user->save();
                      }
                  }

                  return view('admin.dashboard.users.avatar', array('user' => Auth::user()) );
                
              }
        } catch(Exception $e) {
            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }

        

    }

    public function profile(){

        $secret_questions = SecretQuestions::whereVisible(1)->get();

        return view('admin.dashboard.users.profile', array('user' => Auth::user(), "secret_questions" => $secret_questions) );
    }

    public function profile_update(Request $request, $id){

        // dd($request->all());

         try {

                $rules = [
                    'unique_number' => 'required|min:4|max:4',
                    'username'      => 'required|min:3|max:100',
                    'surname'       => 'required|min:3|max:150',
                    'firstname'     => 'required|min:3|max:150',
                    'othername'     => 'min:3|max:150',
                    'email'         => 'required|Email|min:6|max:150',
                    'phone_number'  => 'required|DigitsBetween:11,14|min:11|max:14',
                    'address'       => 'required|min:10|max:255',
                    
                  ];

                  if ($request->change == 1 ) {
                    #  Making sure if password change was selected it's being validated
                    $rules += [
                    'secret_question_id'  => 'required|min:1',
                    'secret_answer'       => 'required|max:50',
                    'password'            => 'required|alpha-num|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
                    ];
                  } else {
                    # code...
                  }
                  


            $v = validator()->make($request->all(), $rules);

            // dd($v);
    
            if( $v->fails() ) {
                return redirect()->back()->withInput()->withErrors($v);
            } else {
                $user                       = User::find($id);
                $user->admin_id             = auth()->id();
                $user->unique_number        = $request->unique_number;
                // $user->is_admin_user        = $request->is_admin_user;
                $user->username             = $request->username;
                $user->surname              = $request->surname;
                $user->firstname            = $request->firstname;              
                $user->othername            = $request->othername;
                $user->email                = $request->email;
                $user->phone_number         = $request->phone_number;
                $user->address              = $request->address;
                $user->slug                 = $request->username;
                $user->secret_question_id   = $request->secret_question_id;
                $user->secret_answer        = $request->secret_answer;
                // $user->visible              = $request->visible;    // visible
                // $user->suspended            = $request->suspended;  // suspended 

                if($request->change == 1){
                    $user->password         = bcrypt($request->password);
                }else{
                    $user->password         = $user->password;
                }
                
                // $user->last_login           = Carbon::now();
                      
                if ( $user->update() ) {
                    return redirect()->back()->withMessage('User Updated Successfully')->withMessageType('success');
                }
            }
        } catch(Exception $e) {
            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }

        // return view('admin.dashboard.users.profile', array('user' => Auth::user()) );
    }

    public function setting(){

        //$
        return view('admin.dashboard.users.setting', array('user' => Auth::user()) );
    }
}
