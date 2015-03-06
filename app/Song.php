<?php
/**
 * Created by PhpStorm.
 * User: luis.ramos
 * Date: 06/03/2015
 * Time: 9:32 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Song extends Eloquent{

    protected $fillable = array(
        'title',
        'lyrics',
        'slug'
    );

}