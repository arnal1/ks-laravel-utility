<?php

namespace Kastana\KsLaravelUtility\Services;

use Kastana\KsLaravelUtility\Contracts\PermissionModelContract;

class PermissionService
{
    protected PermissionModelContract $model;

    public function __construct()
    {
        $model = config('ks-permission.model');
        $this->model = new $model;
    }

    public function getList()
    {
        return $this->model->get();
    }
}
