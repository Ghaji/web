<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;

class Navigations extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
    */

    protected $table = 'navigations';
    
    protected $guarded = ['id'];

    protected $fillable = [
                'name',
                'slug',
                'category',
                'position',
                'weight',
                'has_sub_nav',
                'navigation_type',
                'visible',
                'icon'
                ]; 

    // One Navigation has many Sub Navigations...
    public function subNavigations() {
        return $this->hasMany('Web\SubNavigations');
    }
}
