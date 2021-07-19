<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Authenticatable
{
    protected $table = "users";
    protected $primaryKey = "id";

}
