<?php

namespace Kastana\KsLaravelUtility\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kastana\KsLaravelUtility\Contracts\PermissionModelContract;

class Permission extends Model implements PermissionModelContract
{
    use HasFactory;

    protected $guarded = [];
}
