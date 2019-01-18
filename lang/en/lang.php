<?php return [
    'plugin' => [
        'name' => 'Matomo Tag Manager',
        'description' => 'Add Matomo Tag Manager code to your page.',
    ],

    'components' => [
        'tagmanager' => [
            'name'                      => 'Matomo Tag Manager code',
            'description'               => 'Add Matomo Tag Manager code to your page',
            'container_id'              => 'Container ID',
            'container_id_desc'         => 'Matomo Tag Manager Public Container ID',
        ]
    ],

    'settings'    => [
        'container_id' => [
            'label' => 'Container ID',
            'commentAbove' => 'You can find it on Tag Manager -> Manage Containers page',
            'description' => 'Matomo Settings'
        ],
        'tracker_domain' => [
            'label' => 'Matomo URL',
            'commentAbove' => 'The URL for your Matomo Installation. Do not include http:// or https://',
        ],
        'description' => 'Matomo Settings'

    ]
];