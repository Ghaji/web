<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    // One department Belongs To One Faculty...
    public function faculty() {
        return $this->belongsTo('Web\Faculties', 'faculties_id');
    }

    // One Department has many programmes...
    public function programmes() {
        return $this->hasMany('Web\Programmes');
    }
}
