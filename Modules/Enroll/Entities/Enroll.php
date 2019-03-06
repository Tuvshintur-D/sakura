<?php

namespace Modules\Enroll\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use Translatable;

    protected $table = 'enroll__enrolls';
    public $translatedAttributes = [];
    protected $fillable = [
      'familyname',
      'lastname',
      'firstname',
      'birthday',
      'gender',
      'register_letter1',
      'register_letter2',
      'register_number',
      'class',
      'address',
      'phone1',
      'phone2',
      'contact',
      'email',
      'beforeschool',
      'familystatus',
      'zantuluv',
      'hobby',
      'skill',
      'healthstatus',
      'familycontact',
      'source'
    ];
}
