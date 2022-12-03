<?php

return [
    'superadmin' => [
        'level' => 1
    ],
    'model' => \Kastana\KsLaravelUtility\Models\Permission::class,
    'permissions' => [
        [
            'name' => 'user',
            'alias' => 'User Management',
            'ability' => [
                'view.all' => true,
                'index' => true,
                'create' => true,
                'edit' => true,
                'delete' => true
            ]
        ]
    ]
];
