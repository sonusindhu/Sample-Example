<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model {

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'ads';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['code'];

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        public static $rules = array(
            'code' => 'required'
            
        );

}
