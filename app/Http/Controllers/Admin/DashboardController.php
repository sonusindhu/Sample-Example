<?php

#use Modules\Core\Models\User;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // using controller class
use \Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller {
        /*
          |--------------------------------------------------------------------------
          | Welcome Controller
          |--------------------------------------------------------------------------
          |
          | This controller renders the "marketing page" for the application and
          | is configured to only allow guests. Like most of the other sample
          | controllers, you are free to modify or remove it as you desire.
          |
         */

        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct() {
                $this->middleware('guest');
        }

        /**
         * Show the application welcome screen to the user.
         *
         * @return Response
         */
        public function index() {

                return \View::make('admin.dashboard');
        }

        public function profile() {
                return \View::make('admin.profile', ['profile' => Auth::user()]);
        }

        public function addpost(Request $request) {
                $data = $request->all();
                $info = Auth::user();
                $id = $info->id;
                $users = User::find($id);
                $validator = Validator::make($request->all(), [
                            'title' => 'required',
                            'firstname' => 'required',
                            'surname' => 'required',
                            'email' => 'unique:users,email,' . $id
                ]);
                if ($validator->fails()) {
                        return redirect('/admin/profile')
                                        ->withErrors($validator)
                                        ->withInput();
                }
                $users->firstname = $data['firstname'];
                $users->surname = $data['surname'];
                $users->title = $data['title'];
                $users->email = $data['email'];
                $users->save();
                return redirect('/admin/profile');
        }

        public function password() {
                return \View::make('admin.password');
        }

        // $2y$10$PdSHDPBRn5JGWirPODsC6e/KwfLGh0DW5LxyxRKkdtd526iEO1I5.
        
        public function passwordpost(Request $request) {
                $data = $request->all();
                $info = Auth::user();
                $id = $info->id;
                $users = User::find($id);
                $validator = Validator::make($request->all(), [
                            'password' => 'required|confirmed|min:6',
                ]);
                if ($validator->fails()) {
                        return redirect('/admin/profile/password')
                                        ->withErrors($validator)
                                        ->withInput();
                }
                $password = \Hash::make($data['password']);
                $users->password = $password;
                $users->save();
                return redirect('/admin/profile');
        }

}
