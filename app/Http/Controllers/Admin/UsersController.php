<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller; // using controller class
use App\Http\Requests\Auth\RegisterRequest;

class UsersController extends Controller {
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
                $users = \DB::table('users')
                        ->where('usertypes', '1')
                        ->orderBy('id', 'desc')
                        ->get();
                return \View::make('admin.users', ['users' => $users]);
        }

        public function delete($id) {
                if (empty($id)) {
                        return redirect('/admin/users');
                }
                $users = User::find($id);
                if (empty($users)) {
                        return redirect('/admin/users');
                }
                $users->delete();
                return redirect('/admin/users');
        }

        public function update($id, $status) {
                if (empty($id)) {
                        return redirect('/admin/users');
                }
                $users = User::find($id);
                if (empty($users)) {
                        return redirect('/admin/users');
                }
                $users->status = $status;
                $users->save();
                return redirect('/admin/users');
        }
        
        public function add() {
                return \View::make('admin.addusers');
        }

        public function addpost(RegisterRequest $request) {
                $data = $request->all();
                $data['password'] = \Hash::make($data['password']);
                $user = \App\User::create($data);
                return redirect('/admin/users');
        }

}
