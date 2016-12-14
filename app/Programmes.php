<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;

class Programmes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
    */

    protected $table = 'programmes';
    
    protected $guarded = ['id'];

    protected $fillable = [
                'has_courses',
                'departments_id',
                'name',
                'slug',
                'notice',
                'content',
                'position',
                'description',
                'visible',
                'weight'
                ]; 

    // Many Programmes Belongs To One Department...
    public function department() {
        return $this->belongsTo('Web\Departments', 'departments_id');
    }
}
