<?php
$config = [
    'ExpensesController' => [
        'index' => [
            'headerPath' => 'templates/head',
            'header' => [
                'scripts' => [
                    'vendor/jquery/jquery.min.js',
                    'vendor/datatables/datatables.net/js/jquery.dataTables.min.js',

                    'vendor/bootstrap/js/bootstrap.bundle.js',
                    'vendor/datatables/datatables.net-bs5/js/dataTables.bootstrap5.min.js'
                ],
                'defers' => [
                    //'assets/js/expensesTable.js',
                    'assets/js/expensesTable.min.js',
                ],
                'styles' => [
                    //'vendor/datatables/datatables.net-dt/css/jquery.dataTables.min.css',
                    //'vendor/datatables/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
                    'assets/css/style.min.css',
                ],
                'fonts' => [
                    //'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap',
                ],

                'title' => 'Expenses',
            ],
            /* 'components' => [
                'topbar' => [
                    'topbarContainer' => [
                        'path' => 'components/topbar/topbar_container',
                    ],
                    'navigation' => [
                        'path' => 'components/topbar/navigation',
                        'items' => [
                            'home' => [
                                'link' => ''
                            ],
                        ],
                    ],
                ],
            ], */
            'viewPath' => 'expenses',
            'content' => [
                'header' => 'Sign in', 
                'text' => 'Welcome in your own CMS',
                'form' => [
                    'type' => 'login',
                    'action' => 'signin/login',
                    'parameters' => [
                        'class' => 'class="signin-form"',
                    ]
                ],
                //'inputs' => 
                'buttons' => [
                    'signin' => TRUE,
                    'back' => FALSE,
                ]
            ]
        ],
    ]
];