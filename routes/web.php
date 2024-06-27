<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\CartController;
Route::get('/', function () {
    return view('headers/welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//cart

Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');



Route::get('/cart', function () {
    return view('layout/cart');
});



Route::get('/cart', [CartController::class, 'viewCart']);
Route::get('/products/{productType}', 
[ProductsController::class, 'index']);

Route::post('/cart/add/{productType}/{id}', [CartController::class, 'addToCart'])->name('cart.add');

Route::post('/cart_items/add/{productType}/{id}', [CartController::class, 'addToCart'])->name('cart.add');


//dynamiczne trasy
Route::get('/{product_type}_{category}/{id}', [ProductsController::class, 'showProduct'])->name('main.product');

Route::get('/product_sukienka/{id}', 'App\Http\Controllers\ProductController@showDress')->name('dress.show');


//headers
Route::get('/aboutus', function () {
    return view('headers/aboutus');
});
Route::get('/dress', [CategoryController::class, 'showDresses'])->name('categories}.dress');
Route::get('/shirt', [CategoryController::class, 'showShirts'])->name('categories.shirt');
Route::get('/socks', [CategoryController::class, 'showSocks'])->name('categories.socks');
Route::get('/trousers', [CategoryController::class, 'showTrousers'])->name('categories.trousers');
Route::get('/tshirt', [CategoryController::class, 'showTshirts'])->name('categories.tshirt');
Route::get('/underwear', [CategoryController::class, 'showUnderwear'])->name('categories.underwear');
Route::get('/kategories_underwear', [CategoryController::class, 'showUnderwear'])->name('categories.underwear');

// Route::get('/dress', function () {
//     return view('headers/kategories_dress');
// });
// Route::get('/shirt', function () {
//     return view('headers/kategories_shirt');
// });
// Route::get('/socks', function () {
//     return view('headers/kategories_socks');
// });
// Route::get('/trousers', function () {
//     return view('headers/kategories_trousers');
// });
// Route::get('/tshirt', function () {
//     return view('headers/kategories_tshirt');
// });
// Route::get('/underwear', function () {
//     return view('headers/kategories_underwear');
// });
// Route::get('/kategories_underwear', function () {
//     return view('headers/kategories_underwear');
// });




//main dress

Route::get('/product1_sukienka', function () {
    return view('main/product1_sukienka');
});
Route::get('/product2_sukienka', function () {
    return view('main/product2_sukienka');
});
Route::get('/product3_sukienka', function () {
    return view('main/product3_sukienka');
});
Route::get('/product4_sukienka', function () {
    return view('main/product4_sukienka');
});
Route::get('/product5_sukienka', function () {
    return view('main/product5_sukienka');
});
Route::get('/product6_sukienka', function () {
    return view('main/product6_sukienka');
});
Route::get('/product7_sukienka', function () {
    return view('main/product7_sukienka');
});
Route::get('/product8_sukienka', function () {
    return view('main/product8_sukienka');
});

//trousers 
Route::get('/product1_spodnie', function () {
    return view('main/product1_spodnie');
});
Route::get('/product2_spodnie', function () {
    return view('main/product2_spodnie');
});
Route::get('/product11_spodnie', function () {
    return view('main/product11_spodnie');
});

Route::get('/product12_spodnie', function () {
    return view('main/product12_spodnie');
});
Route::get('/product13_spodnie', function () {
    return view('main/product13_spodnie');
});
Route::get('/product14_spodnie', function () {
    return view('main/product14_spodnie');
});
Route::get('/product15_spodnie', function () {
    return view('main/product15_spodnie');
});
Route::get('/product16_spodnie', function () {
    return view('main/product16_spodnie');
});
//tshirt
Route::get('/product17_tshirt', function () {
    return view('main/product17_tshirt');
});
Route::get('/product18_tshirt', function () {
    return view('main/product18_tshirt');
});
Route::get('/product19_tshirt', function () {
    return view('main/product19_tshirt');
});
Route::get('/product20_tshirt', function () {
    return view('main/product20_tshirt');
});
Route::get('/product21_tshirt', function () {
    return view('main/product21_tshirt');
});
Route::get('/product22_tshirt', function () {
    return view('main/product22_tshirt');
});
Route::get('/product23_tshirt', function () {
    return view('main/product23_tshirt');
});
Route::get('/product23_1tshirt', function () {
 return view('main/product23_1tshirt');
});
//SHIRT
// Route::get('/product25_shirt', function () {
//     return view('main/product25_shirt');
// });
Route::get('/product24_shirt', function () {
    return view('main/product24_shirt');
});
Route::get('/product26_shirt', function () {
    return view('main/product26_shirt');
});
Route::get('/product27_shirt', function () {
    return view('main/product27_shirt');
});
Route::get('/product28_shirt', function () {
    return view('main/product28_shirt');
});
Route::get('/product29_shirt', function () {
    return view('main/product29_shirt');
});
Route::get('/product30_shirt', function () {
    return view('main/product30_shirt');
});
Route::get('/product31_shirt', function () {
    return view('main/product31_shirt');
});


//bielizna
Route::get('/product32_bielizna', function () {
    return view('main/product32_bielizna');
});
Route::get('/product33_bielizna', function () {
    return view('main/product33_bielizna');
});
Route::get('/product34_bielizna', function () {
    return view('main/product34_bielizna');
});
Route::get('/product35_bielizna', function () {
    return view('main/product35_bielizna');
});
Route::get('/product36_bielizna', function () {
    return view('main/product36_bielizna');
});
Route::get('/product37_bielizna', function () {
    return view('main/product37_bielizna');
});
Route::get('/product38_bielizna', function () {
    return view('main/product38_bielizna');
});
Route::get('/product39_bielizna', function () {
    return view('main/product39_bielizna');
});

//socks
Route::get('/product1_socks', function () {
    return view('main/product1_socks');
});
Route::get('/product2_socks', function () {
    return view('main/product2_socks');
});
Route::get('/product3_socks', function () {
    return view('main/product3_socks');
});
Route::get('/product4_socks', function () {
    return view('main/product4_socks');
});
Route::get('/product5_socks', function () {
    return view('main/product5_socks');
});
Route::get('/product6_socks', function () {
    return view('main/product6_socks');
});
Route::get('/product7_socks', function () {
    return view('main/product7_socks');
});
Route::get('/product8_socks', function () {
    return view('main/product8_socks');
});

//footer
Route::get('/contact', function () {
    return view('footer/contact');
});
Route::get('/cookies', function () {
    return view('footer/cookies');
});
Route::get('/exchange', function () {
    return view('footer/exchange');
});
Route::get('/shopping_prices', function () {
    return view('footer/shopping_prices');
});
Route::get('/size_tables', function () {
    return view('footer/size_tables');
});
Route::get('/statute', function () {
    return view('footer/statute');
});
Route::get('/{product_type}_{category}/{id}', [ProductsController::class, 'showProduct'])->name('main.product');


//dashboar 
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('dashboard');
