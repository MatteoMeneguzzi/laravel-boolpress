<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [ 
        'title',
        'slug',
        'category_id',
        'content'  
    ];

    //Relazione con CATEGORIES
        //posts - categories
        public function category() {
            return $this->belongsTo('App\Category');
        }

        // Relazione CON TAGS_TABLE_SEEDER
        // posts - tags
        public function tags() {
            return $this->belongsToMany('App\Tag');
        }
}
