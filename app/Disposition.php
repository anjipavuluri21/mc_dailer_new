<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Disposition extends Authenticatable
{

    protected $guarded = [];
    protected $table = 'disposition';

}
