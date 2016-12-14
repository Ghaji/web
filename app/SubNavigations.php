<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;

class SubNavigations extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
    */

    protected $table = 'sub_navigations';
    
    protected $guarded = ['id'];

    protected $fillable = [
                'navigations_id',
                'name',
                'slug',
                'has_children',
                'position',
                'content',
                'visible',
                'weight',
                'icon'
                ]; 


    // One SubNavigation Belongs To One Navigations...
    public function navigation() {
        return $this->belongsTo('Web\Navigations', 'navigations_id');
    }

    // public function getNavigationId($navigationsId){

    //     $navigation = Navigations::whereNavigationsId($navigationsId)->whereVisible(1)->whereWeight(1)->first(['id']);

    //     return (count($navigation) > 0) ? $navigation->id : "";

    // }
}
