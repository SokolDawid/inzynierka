<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersRole extends Model
{
    protected $table = 'users_roles';
    
    public $timestamps = false;

    protected $fillable = ['UserID', 'RoleID', 'DateAssignment', 'DateRevoke'];
}
