<?php

namespace App\Models;

use App\Models\Authorization\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $guarded = ['id'];

    function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    function check($permission)
    {
        return $this->role->permissions()->where('slug', $permission)->exists();
    }
}
