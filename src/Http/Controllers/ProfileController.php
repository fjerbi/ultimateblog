<?php


namespace fjerbi\ultimateblog\Http\Controllers;
use Auth;
use DB;
use Input;
use Illuminate\Support\Facades\Validator;
use fjerbi\ultimateblog\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('ultimateblog::profile', compact('users'));
    }

    public function user($id){
        $user = User::find($id);
        return view('ultimateblog::user', compact('user'));
    }


    public function update()
	{

		$rules = array(
            'name' => 'required|max:255',
			'phone' => 'required|max:15',
			 'dob' => 'required',
			'country' => 'required',
			'city' => 'required',
			'address' => 'required',
        ); // Validations on the data sent through Edit Form

        $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
            	return view('ultimateblog::edit');
      		  }

      		else {
          		DB::table('users')
                ->where('email', Auth::user()->email)
                ->update(array( 'password' => Auth::user()->password,

               	'name' => Input::get('name')
               	)); // Saving the Changes to profile

               	return Redirect('ultimateblog::profile');
        	  }

    }


}
