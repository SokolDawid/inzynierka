<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'UserID';

    protected $fillable = [
        'FirstName',
        'LastName',
        'PhoneNumber',
        'PhoneNumberSecondary',
        'email',
        'password',
        'WhoAdd',
        'WhoModified',
        'DateAdd',
        'DateModified',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'BirthDate' => 'date',
        'password' => 'hashed',
    ];

    public $timestamps = true;
    const CREATED_AT = 'DateAdd';
    const UPDATED_AT = 'DateModified';

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles', 'UserID', 'RoleID');
    }

    public function hasRole(string $roleName): bool
    {
        return $this->roles()->where('RoleName', $roleName)->exists();
    }

}
