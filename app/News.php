<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'news';
    protected $guarded = ['id'];

    protected $fillable = [
                    'itype',
                    'category_id',
                    'sub_category_id',
                    'latest_news',
                    'slug',
                    'title',
                    'display_line', 
                    'content',
                    'has_image', 
                    'image_id',
                    'position',
                    'visible',
                    'archived',
                    'archived_by',
                    'archived_date',
                    'author',
                    'verified',                   
                    'verified_by',
                    'verified_date',
                    'deleted',
                    'deleted_by',
                    'deleted_date',
    ];
}
