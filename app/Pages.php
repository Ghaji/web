<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
    */

    protected $table = 'pages';
    
    protected $guarded = ['id'];

    protected $fillable = [
                'name',
                'slug',
                'content',
                'position',
                'weight',
                'visible',
                'author_id'
                ]; 
}
