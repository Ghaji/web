<?php

namespace Web;

use Illuminate\Database\Eloquent\Model;

class SecretQuestions extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
    */

    protected $table = 'secret_questions';
    
    protected $guarded = ['id'];

    protected $fillable = [
                'question',
                'visible'
                ]; 

}
