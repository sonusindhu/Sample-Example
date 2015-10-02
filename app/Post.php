<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'posts';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['title', 'slug','content','image'];

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        public static $rules = array(
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        );

        

}
