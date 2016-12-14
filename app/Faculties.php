<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    // One faculty has many department...
    public function departments() {
        return $this->hasMany('Web\Departments');
    }
}
