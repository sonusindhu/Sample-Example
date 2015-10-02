<?php

#use Modules\Core\Models\User;

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // using controller class

class LoginController extends Controller {
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

                return \View::make('admin.login');
        }

        public function logout() {
                Auth::logout();
                return redirect('/admin/login');
        }

        public function post(Request $request) {
                if (isset($_POST)) {
                        if (Auth::attempt($request->only('email', 'password'))) {
                                return redirect()->intended('/admin');
                        } else {
                                return redirect('/admin/login')->withErrors([
                                            'email' => 'Invalid credentials. Try again?',
                                ]);
                        }
                }
                return \View::make('admin.login');
        }

}
