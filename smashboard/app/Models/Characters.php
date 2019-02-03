<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Characters extends Model 
{   
    /**
     * the table assiciated to characters
     * 
     * @var string
     */

    protected $table = 'characters';
}