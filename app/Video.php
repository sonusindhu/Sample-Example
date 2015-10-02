<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Video extends Model {

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'videos';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['title', 'embed'];

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        public static $rules = array(
            'title' => 'required',
            'embed' => 'required'
        );


}
