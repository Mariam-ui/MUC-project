<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contents';
    protected $fillable = [
        'key', 'en', 'ru', 'de'
    ];
    public $timestamps = false;
}
