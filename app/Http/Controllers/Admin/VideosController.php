<?php

namespace App\Http\Controllers\Admin;

use App\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class VideosController extends Controller {
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
                $videos = \DB::table('videos')
                        ->orderBy('id', 'desc')
                        ->get();
                return \View::make('admin.videos.manage', ['videos' => $videos]);
        }

        public function delete($id) {
                if (empty($id)) {
                        return redirect('/admin/videos');
                }
                $videos = Video::find($id);
                if (empty($videos)) {
                        return redirect('/admin/videos');
                }
                $videos->delete();
                return redirect('/admin/videos');
        }

        public function update($id, $status) {
                if (empty($id)) {
                        return redirect('/admin/videos');
                }
                $videos = Video::find($id);
                if (empty($videos)) {
                        return redirect('/admin/videos');
                }
                $users->status = $status;
                $users->save();
                return redirect('/admin/videos');
        }

        public function add() {
                return \View::make('admin.videos.addvideos');
        }

        public function addvideo(Request $request) {
                $data = $request->all();
                $validator = Validator::make($request->all(), [
                            'title' => 'required|unique:helps|max:255',
                            'embed' => 'required',
                ]);

                if ($validator->fails()) {
                        return redirect('/admin/videos/add')
                                        ->withErrors($validator)
                                        ->withInput();
                }
                $user = \App\Video::create($data);
                return redirect('/admin/videos');
        }
        
        
        public function edit($id) {
                $video = Video::find($id);
                if(!$video){
                        return redirect('/admin/videos');
                }
                return \View::make('admin.videos.editvideo', ['video' => $video]);
        }

        public function editvideo(Request $request) {
                $data = $request->all();
                $validator = Validator::make($request->all(), [
                            'title' => 'required|max:255',
                            'embed' => 'required',
                ]);
                if ($validator->fails()) {
                        return redirect('/admin/videos/add')
                                        ->withErrors($validator)
                                        ->withInput();
                }
                $id = $data['id'];
                $videos = Video::find($id);
                $videos->title = $data['title'];
                $videos->embed = $data['embed'];
                $videos->save();
                return redirect('/admin/videos');
        }

}
