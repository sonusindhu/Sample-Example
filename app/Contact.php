<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'contacts';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['username','email', 'message'];

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        public static $rules = array(
            'username' => 'required',
            'email' => 'required',
            'message' => 'required'
        );

}
