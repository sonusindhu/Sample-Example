<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller {
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
                $data = \DB::table('posts')
                        ->orderBy('id', 'desc')
                        ->get();
                return \View::make('admin.posts.manage', ['data' => $data]);
        }

        public function delete($id) {
                if (empty($id)) {
                        return redirect('/admin/posts');
                }
                $data = Post::find($id);
                if (empty($data)) {
                        return redirect('/admin/posts');
                }
                $data->delete();
                return redirect('/admin/posts');
        }

        public function update($id, $status) {
                if (empty($id)) {
                        return redirect('/admin/posts');
                }
                $data = Post::find($id);
                if (empty($data)) {
                        return redirect('/admin/posts');
                }
                $data->status = $status;
                $data->save();
                return redirect('/admin/posts');
        }

        public function add() {
                return \View::make('admin.posts.add');
        }

        public function addpost(Request $request) {
                $data = $request->all();
                $data['slug'] = str_slug($data['title'], '-');
                $file = $request->file('image');
                $validator = Validator::make($data, [
                            'title' => 'required|unique:posts|max:240',
                            'content' => 'required',
                            'slug' => 'required|unique:posts|max:250',
                            'image' => 'required|mimes:jpeg,jpg,bmp,png',
                ]);
                if ($validator->fails()) {
                        return redirect('/admin/posts/add')
                                        ->withErrors($validator)
                                        ->withInput();
                }
                $fileName = time() . "_" . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('uploads'), $fileName);
                $data['image'] = $fileName;
                $posts = \App\Post::create($data);
                return redirect('/admin/posts');
        }

        public function edit($id) {
                $data = Post::find($id);
                if (!$data) {
                        return redirect('/admin/posts');
                }
                return \View::make('admin.posts.edit', ['data' => $data]);
        }

        public function editpost(Request $request) {
                $data = $request->all();
                $id = $data['id'];
                $posts = Post::find($id);
                $validator = Validator::make($request->all(), [
                            'title' => 'required|max:240',
                            'slug' => 'required|max:250',
                            'content' => 'required'
                ]);
                if ($validator->fails()) {
                        return redirect('/admin/posts/add')
                                        ->withErrors($validator)
                                        ->withInput();
                }

                if ($request->hasFile('image')) {
                        $imagesURL = $posts['image'];
                        $fileExtension = array('image/jpeg','image/png','image/jpg');
                        $file = $request->file('image');
                        $fileName = time() . "_" . $request->file('image')->getClientOriginalName();
                        $fileExt = $request->file('image')->getMimeType();
                        if(!in_array($fileExt, $fileExtension)){
                                return redirect('/admin/posts/edit/'.$id)
                                        ->withErrors(['Only .jpeg,.jpg,.png allowed.'])
                                        ->withInput();
                        }
                        $fileExt = $request->file('image')->getMimeType();
                        $request->file('image')->move(public_path('uploads'), $fileName);
                        $posts->image = $fileName;
                        unlink(public_path('uploads')."/".$imagesURL);
                }

                $posts->title = $data['title'];
                $posts->slug = $data['slug'];
                $posts->content = $data['content'];
                $posts->save();
                return redirect('/admin/posts');
        }

}
