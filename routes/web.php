<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route 1: Homepage
Route::get('/', function () {
    return view('Home');
});

// Route 2: Dynamic Products
Route::get('/produits/{cat}', function ($cat) {
    $produits = [];

    if ($cat === 'hicking') {
        $produits = [
            [
                'name' => 'Sac à dos Adventure',
                'price' => 200,
                'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'Tente Explorer',
                'price' => 300,
                'image' => 'https://images.unsplash.com/photo-1478131143081-80f7f84ca84d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'Montre GPS Pro',
                'price' => 150,
                'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
            ]
        ];
    } elseif ($cat === 'electromenager') {
        $produits = [
            [
                'name' => 'Machine à laver Ultra',
                'price' => 3000,
                'image' => 'https://images.unsplash.com/photo-1626806775351-104741e12985?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'Four MasterChef',
                'price' => 1500,
                'image' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'Micro-onde Quick',
                'price' => 1000,
                'image' => 'https://images.unsplash.com/photo-1574269909862-7e1d70bb8078?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
            ]
        ];
    } else {
        abort(404);
    }

    return view('Produits', [
        'produits' => $produits,
        'categorie' => $cat
    ]);
});
