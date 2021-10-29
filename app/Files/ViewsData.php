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
                                        "buttons" => [
                                            'add' => [ //try nameing your buttons for better visavility in viewData
                                                'settings' => [
                                                    'visible' => true,
                                                    'modal' => true,
                                                ],
                                                'class' => [
                                                    "btn","btn-sm","btn-primary"
                                                ],
                                                'text' => "Add",
                                                'target' => "#exampleModal", //modal's id example #exampleModal for modal id="exampleModal"
                                            ],
                                            'raport' => [ //try nameing your buttons for better visavility in viewData
                                                'settings' => [
                                                    'visible' => false,
                                                    'modal' => false,
                                                ],
                                                'class' => [
                                                    "btn","btn-sm","btn-primary"
                                                ],
                                                'text' => "Raport",
                                                'target' => null, //modal's id example #exampleModal for modal id="exampleModal"
                                            ],
                                        ],
                                        "modals" => [
                                            'add' => [
                                                'id' => "exampleModal", //same as button midal target without #
                                                'class' => ['modal','fade'],
                                                'settings' => [
                                                    'visible' => true,
                                                ],
                                                'header' => [
                                                    'text' => 'ADD EXPENSE',
                                                ],
                                                'body' => [
                                                    'group' => [
                                                        "input" => [
                                                            'label' => [
                                                                'class' => ['input-group-text'],
                                                                'id' => ["label-for-first-name"],
                                                                'name' => "Name",
                                                            ],
                                                            'input' => [
                                                                'class' => ["form-control"],
                                                                'type' => "text",
                                                                'id' => ["name"],
                                                                'aria-describedby' => "label-for-first-name",
                                                                'placeholder' => "test",
                                                            ],
                                                        ],
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