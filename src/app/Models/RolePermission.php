<?php

namespace CodersHut\RolePermissionManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RolePermission extends Model
{
    use HasFactory;


    protected $fillable = [
        "ulid",
        "role_id",
        "permission_id",
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->ulid)) {
                $model->ulid = Str::ulid();
            }
        });
    }
}
