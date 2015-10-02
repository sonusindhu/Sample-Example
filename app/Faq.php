<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model {

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'helps';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['title', 'description'];

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        public static $rules = array(
            'title' => 'required',
            'description' => 'required'
        );

//        public function rules() {
//                return [
//                    'title' => 'required',
//                    'description' => 'required'
//                ];
//        }

}
