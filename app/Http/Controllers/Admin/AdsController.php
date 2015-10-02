<?php

namespace App\Http\Controllers\Admin;

use App\Ad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class AdsController extends Controller {
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
                $ads = \DB::table('ads')
                        ->get();
                return \View::make('admin.ads.manage', ['ads' => $ads]);
        }
        
        public function edit($position) {
                $ads = \DB::table('ads')
                        ->where('position', $position)
                        ->first();
                return \View::make('admin.ads.edit', ['ads' => $ads]);
        }
        
        public function editad(Request $request) {
                $data = $request->all();
                $id = $data['id'];
                $ads = Ad::find($id);
                
                $validator = Validator::make($request->all(), [
                            'code' => 'required',
                ]);
                if ($validator->fails()) {
                        return redirect('/admin/ads/edit/'.$ads->position)
                                        ->withErrors($validator)
                                        ->withInput();
                }
                
                $ads->code = $data['code'];
                $ads->save();
                return redirect('/admin/ads');
        }

        public function delete($id) {
                if (empty($id)) {
                        return redirect('/admin/ads');
                }
                $ads = Ad::find($id);
                if (empty($ads)) {
                        return redirect('/admin/ads');
                }
                $ads->delete();
                return redirect('/admin/ads');
        }

        public function update($id, $status) {
                if (empty($id)) {
                        return redirect('/admin/ads');
                }
                $ads = Ad::find($id);
                if (empty($ads)) {
                        return redirect('/admin/ads');
                }
                $ads->status = $status;
                $ads->save();
                return redirect('/admin/ads');
        }

        
}
