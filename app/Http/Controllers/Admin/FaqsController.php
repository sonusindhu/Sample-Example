<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class FaqsController extends Controller {
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
                $users = \DB::table('helps')
                        ->orderBy('id', 'desc')
                        ->get();
                return \View::make('admin..faqs.manage', ['users' => $users]);
        }

        public function delete($id) {
                if (empty($id)) {
                        return redirect('/admin/faqs');
                }
                $users = Faq::find($id);
                if (empty($users)) {
                        return redirect('/admin/faqs');
                }
                $users->delete();
                return redirect('/admin/faqs');
        }

        public function update($id, $status) {
                if (empty($id)) {
                        return redirect('/admin/faqs');
                }
                $users = Faq::find($id);
                if (empty($users)) {
                        return redirect('/admin/faqs');
                }
                $users->status = $status;
                $users->save();
                return redirect('/admin/faqs');
        }

        public function add() {
                return \View::make('admin.faqs.addfaq');
        }

        public function addfaq(Request $request) {
                $data = $request->all();
                $validator = Validator::make($request->all(), [
                            'title' => 'required|unique:helps|max:255',
                            'description' => 'required',
                ]);

                if ($validator->fails()) {
                        return redirect('/admin/faqs/add')
                                        ->withErrors($validator)
                                        ->withInput();
                }
                $user = \App\Faq::create($data);
                return redirect('/admin/faqs');
        }
        
        
        public function edit($id) {
                $faqs = Faq::find($id);
                if(!$faqs){
                        return redirect('/admin/faqs');
                }
                return \View::make('admin.faqs.editfaq', ['faq' => $faqs]);
        }

        public function editfaq(Request $request) {
                $data = $request->all();
                $validator = Validator::make($request->all(), [
                            'title' => 'required|max:255',
                            'description' => 'required',
                ]);
                if ($validator->fails()) {
                        return redirect('/admin/faqs/add')
                                        ->withErrors($validator)
                                        ->withInput();
                }
                $id = $data['id'];
                $helps = Faq::find($id);
                $helps->title = $data['title'];
                $helps->description = $data['description'];
                $helps->save();
                return redirect('/admin/faqs');
        }

}
