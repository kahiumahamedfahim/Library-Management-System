<?php

$router->get('/', 'BookController@index');

$router->get('/login', 'AuthController@login');

$router->post('/login', 'AuthController@login');

$router->get('/register', 'AuthController@register');

$router->post('/register', 'AuthController@register');

$router->get('/logout', 'AuthController@logout');
$router->get(
    '/profile',
    'ProfileController@profile'
);

$router->post(
    '/profile',
    'ProfileController@profile'
);
// =========================
// GENRE ROUTES
// =========================

$router->get(
    '/genres',
    'GenreController@index'
);

$router->get(
    '/genres/create',
    'GenreController@create'
);

$router->post(
    '/genres/create',
    'GenreController@create'
);
// =========================
// DASHBOARD ROUTES
// =========================

$router->get(
    '/member',
    'DashboardController@member'
);

$router->get(
    '/librarian',
    'DashboardController@librarian'
);

$router->get(
    '/admin',
    'DashboardController@admin'
);
$router->get(
    '/genres/edit',
    'GenreController@edit'
);

$router->post(
    '/genres/edit',
    'GenreController@edit'
);
$router->post(
    '/genres/delete',
    'GenreController@delete'
);
// =========================
// BOOK ROUTES
// =========================

$router->get(
    '/books',
    'BookController@index'
);

$router->get(
    '/books/create',
    'BookController@create'
);

$router->post(
    '/books/create',
    'BookController@create'
);
$router->get(
    '/books/edit',
    'BookController@edit'
);

$router->post(
    '/books/edit',
    'BookController@edit'
);
$router->post(
    '/books/delete',
    'BookController@delete'
);