<?php

namespace RayyanPanja\RolePermissionManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Permission extends Model
{
    use HasFactory;


    protected $fillable = [
        "ulid",
        "permission_group_id",
        "name",
        "description",
        "key",
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
