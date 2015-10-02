<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller {
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
                $contacts = \DB::table('contacts')
                        ->orderBy('id', 'desc')
                        ->get();
                return \View::make('admin.contacts.manage', ['contacts' => $contacts]);
        }

        public function delete($id) {
                if (empty($id)) {
                        return redirect('/admin/contacts');
                }
                $contacts = Contact::find($id);
                if (empty($contacts)) {
                        return redirect('/admin/contacts');
                }
                $users->delete();
                return redirect('/admin/contacts');
        }

        public function update($id, $status) {
                if (empty($id)) {
                        return redirect('/admin/contacts');
                }
                $contacts = Contact::find($id);
                if (empty($contacts)) {
                        return redirect('/admin/contacts');
                }
                $contacts->status = $status;
                $contacts->save();
                return redirect('/admin/contacts');
        }

        
}
