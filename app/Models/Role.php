<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    
    protected $primaryKey = 'RoleID';

    protected $fillable = ['RoleName', 'Active', 'DateAdd', 'ActiveTo'];
}
