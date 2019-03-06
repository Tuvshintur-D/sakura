<?php

namespace Modules\Enroll\Entities;

use Illuminate\Database\Eloquent\Model;

class EnrollTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'enroll__enroll_translations';
}
