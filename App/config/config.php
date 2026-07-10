<?php

return [
    'langs' => ['es', 'eu'],
    'lang_default' => env('LANG_DEFAULT', 'es'),
    'global_routes' => [
        '/showroom' => [
            'view' => 'showroom.php',
            'resources' => 'src/assets/js/showroom.js',
        ],
    ],

    // Rutas que reciben formularios. La clave es el action del formulario y
    // el valor es el archivo PHP que debe procesar sus datos.
    'post_routes' => [
        '/app/artForm' => 'app/artForm.php',
        '/app/artForm01' => 'app/artForm01.php',
        '/app/artForm02' => 'app/artForm02.php',
    ],

    'routes' => [
        'es' => [
            '/es' => [
                'view' => 'inicio.php',
                'resources' => 'src/assets/js/inicio.js',
            ],
            '/es/contacto' => [
                'view' => 'contacto.php',
                'resources' => 'src/assets/js/contacto.js',
            ],
            '/es/quienes-somos' => [
                'view' => 'equipo.php',
                'resources' => 'src/assets/js/equipo.js',
            ],
            '/es/productos' => [
                'view' => 'productos.php',
                'resources' => 'src/assets/js/productos.js',
            ],
            '/es/producto1' => [
                'view' => 'producto1.php',
                'resources' => 'src/assets/js/producto.js',
            ],
            '/es/producto2' => [
                'view' => 'producto2.php',
                'resources' => 'src/assets/js/producto.js',
            ],
            '/es/legal' => [
                'view' => 'legal.php',
                'resources' => 'src/assets/js/legal.js',
            ],
            '/es/404' => [
                'view' => '404.php',
                'resources' => 'src/assets/js/inicio.js',
            ],
        ],
        'eu' => [
            '/eu' => [
                'view' => 'inicio.php',
                'resources' => 'src/assets/js/inicio.js',
            ],
            '/eu/kontaktua' => [
                'view' => 'contacto.php',
                'resources' => 'src/assets/js/contacto.js',
            ],
            '/eu/nortzuk-gara' => [
                'view' => 'equipo.php',
                'resources' => 'src/assets/js/equipo.js',
            ],
            '/eu/produktuak' => [
                'view' => 'productos.php',
                'resources' => 'src/assets/js/productos.js',
            ],
            '/eu/produktua-1' => [
                'view' => 'producto1.php',
                'resources' => 'src/assets/js/producto.js',
            ],
            '/eu/produktua-2' => [
                'view' => 'producto2.php',
                'resources' => 'src/assets/js/producto.js',
            ],
            '/eu/lege-oharra' => [
                'view' => 'legal.php',
                'resources' => 'src/assets/js/legal.js',
            ],
            '/eu/404' => [
                'view' => '404.php',
                'resources' => 'src/assets/js/inicio.js',
            ],
        ]
    ],
];
