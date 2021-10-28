<?php
$config = [
    'ExpensesController' => [
        'expenses' => [
            'head' => [
                'path' => "templates/head",
                'data' => [
                    'title' => 'Expenses',
                    'favicon' => "", //favicon image path
                    'scripts' => [
                        'vendor/jquery/jquery.min.js',
                        'vendor/datatables/datatables.net/js/jquery.dataTables.min.js',
    
                        //'vendor/bootstrap/js/bootstrap.bundle.js',
                        'vendor/datatables/datatables.net-bs5/js/dataTables.bootstrap5.min.js',
                        'vendor/bootstrap/js/bootstrap.js',
                        
                    ],
                    'defers' => [
                        //'assets/js/expensesTable.js',
                        'assets/js/expensesTable.min.js',
                        'assets/js/main.min.js',
                    ],
                    'styles' => [
                        //'vendor/datatables/datatables.net-dt/css/jquery.dataTables.min.css',
                        'vendor/bootstrap/dist/css/bootstrap.min.css',
                        'vendor/datatables/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
                        'assets/css/styles_mobile.min.css',
                    ],
                    'fonts' => [
                        //'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap',
                    ],
                ],
            ],
            'body' => [
                'container' => [
                    'open' => 'templates/main-container-open',
                    'contents' => [
                        'navigation' => [
                            'path' => "/components/navigation/menu",
                            'data' => [
                                'brandSection' => [
                                    'data' => [
                                        'link' => "/",
                                        'logo' => [
                                            'image' => "assets/img/logo.svg",
                                            'text' => 'Budget',
                                        ],
                                    ],
                                ],
                                'menuSection' => [
                                    'data' => [
                                        'groups' => [
                                            [   
                                                'link' => "/dashboard",
                                                'name' => "dashboard", //TO-DO try generate view from that and add here correct group name
                                                'icon' => "assets/img/dashboard.svg",
                                            ],
                                            [   
                                                //'link' => "#",
                                                'name' => "tables",
                                                'icon' => "assets/img/tables.svg",
                                                //extend content in grup
                                                'colapsedTriger' => [
                                                    'class' => 'colapseTriger',
                                                ],
                                                'colapsedContent' => [
                                                    'class' => 'colapseContent',
                                                    'items' => [     
                                                        [
                                                            'text' => "Expenses",
                                                            'link' => "/expenses",
                                                            //'icon' => "", Maybe on future
                                                            'active' => "true",
                                                        ],
                                                        [
                                                            'text' => "Incomes",
                                                            'link' => "/incomes",
                                                            //'icon' => "", Maybe on future
                                                            //'active' => "", 
                                                        ],
                                                        
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'container' => [
                            'open' => "templates/content/content-container-open",
                            'contents' => [
                                'header' => [
                                    'path' => "templates/content/header",
                                    'data' => [
                                        'header' => [
                                            'text' => "Expenses",
                                        ],
                                        'subHeader' => [
                                            'text' => "Table of your all expenses",
                                        ],
                                    ],
                                ],
                                'table' => [
                                    'path' => 'table', //link to table path
                                    'data' => [
                                        "button" => [
                                            'add' => [
                                                'path' => "", //path to button
                                                'data' => [
                                                    'text' => "add",
                                                    'modalId' => "",
                                                ],
                                            ],
                                            'raport' => [
                                                'path' => "", //path to button
                                                'data' => [
                                                    'text' => "add",
                                                ],
                                            ],
                                        ],
                                        "modal" => [
                                            'add' => [
                                                'path' => "",
                                                'data' => [
                                                    "inputs" => 
                                                    [
                                                        "class" => [
                                                            "","",""
                                                        ],
                                                        "type" => "",
                                                        'placeholder' => "",
                                                    ],
                                                    [
                                                        "class" => [
                                                            "","",""
                                                        ],
                                                        "type" => "",
                                                        'placeholder' => "",
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'clouse' => "templates/content/content-container-clouse",
                        ],
                    ],
                    'clouse' => "templates/main-container-clouse",
                ],
            ],
            /* 'footer' => [
                'path' => "templates/head",
                'data' => [],
            ], */ 
        ],
    ]
];