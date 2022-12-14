<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Config\Permission;
use Spatie\Permission\Traits\HasRoles;

class Role extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = ['name', 'guard_name'];
    protected $guard = ['web'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'role_has_permissions');
    }

}
