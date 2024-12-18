<?php

namespace CodersHut\RolePermissionManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 1;

    protected $fillable = [
        "ulid",
        "name",
        "description",
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
