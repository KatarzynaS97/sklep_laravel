<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
Route::get('/cart', function () {
    return view('layout/cart');
});



Route::get('/cart', [CartController::class, 'viewCart']);
Route::get('/products/{productType}', 
[ProductsController::class, 'index']);

Route::post('/cart/add/{productType}/{id}', [CartController::class, 'addToCart'])->name('cart.add');


// Route::post('/cart_items/add/{productType}/{id}', [CartController::class, 'addToCart'])->name('cart.add');


// Route::get('/product1_sukienka/{id}', [ProductsController::class, 'show'])->name('product.show');




//dynamiczne trasy
Route::get('/{product_type}_{category}/{id}', [ProductsController::class, 'showProduct'])->name('main.product');

//headers
Route::get('/aboutus', function () {
    return view('headers/aboutus');
});
Route::get('/dress', function () {
    return view('headers/kategories_dress');
});
Route::get('/shirt', function () {
    return view('headers/kategories_shirt');
});
Route::get('/socks', function () {
    return view('headers/kategories_socks');
});
Route::get('/trousers', function () {
    return view('headers/kategories_trousers');
});
Route::get('/tshirt', function () {
    return view('headers/kategories_tshirt');
});
Route::get('/underwear', function () {
    return view('headers/kategories_underwear');
});
Route::get('/kategories_underwear', function () {
    return view('headers/kategories_underwear');
});
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
Route::get('/product9_spodnie', function () {
    return view('main/product9_spodnie');
});
Route::get('/product10_spodnie', function () {
    return view('main/product10_spodnie');
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

// Route::get('/product1/1', [ProductsController::class, 'index'])->name('main.product1_sukienka');
// Route::get('/product1/1', [ProductsController::class, 'showProduct'])->name('main.product1_sukienka');
// Route::get('/product2_sukienka/2', [ProductsController::class, 'showProduct2'])->name('main.product2_sukienka');
// Route::get('/product3_sukienka/3', [ProductsController::class, 'showProduct3'])->name('main.product3_sukienka');
// Route::get('/product4_sukienka/4', [ProductsController::class, 'showProduct4'])->name('main.product4_sukienka');
// Route::get('/product5_sukienka/5', [ProductsController::class, 'showProduct5'])->name('main.product5_sukienka');
// Route::get('/product6_sukienka/6', [ProductsController::class, 'showProduct6'])->name('main.product6_sukienka');
// Route::get('/product7_sukienka/7', [ProductsController::class, 'showProduct7'])->name('main.product7_sukienka');
// Route::get('/product8_sukienka/8', [ProductsController::class, 'showProduct8'])->name('main.product8_sukienka');

// //trousers
// Route::get('/product9_spodnie/1', [ProductsController::class, 'showProduct9'])->name('main.product9_spodnie/1');
// Route::get('/product10_spodnie/2', [ProductsController::class, 'showProduct10'])->name('main.product10_spodnie/2');
// Route::get('/product11_spodnie/3', [ProductsController::class, 'showProduct11'])->name('main.product11_spodnie/3');
// Route::get('/product12_spodnie/4', [ProductsController::class, 'showProduct12'])->name('main.product12_spodnie/4');
// Route::get('/product13_spodnie/5', [ProductsController::class, 'showProduct13'])->name('main.product13_spodnie/5');
// Route::get('/product14_spodnie/6', [ProductsController::class, 'showProduct14'])->name('main.product14_spodnie/6');
// Route::get('/product15_spodnie/7', [ProductsController::class, 'showProduct15'])->name('main.product15_spodnie/7');
// Route::get('/product16_spodnie/8', [ProductsController::class, 'showProduct16'])->name('main.product16_spodnie/8');


// //tshirt
// Route::get('/product17_tshirt/1', [ProductsController::class, 'showProduct17'])->name('/product17_tshirt/1');
// Route::get('/product18_tshirt/2', [ProductsController::class, 'showProduct18'])->name('/product18_tshirt/2');
// Route::get('/product19_tshirt/3', [ProductsController::class, 'showProduct19'])->name('/product19_tshirt/3');
// Route::get('/product20_tshirt/4', [ProductsController::class, 'showProduct20'])->name('/product20_tshirt/3');
// Route::get('/product21_tshirt/5', [ProductsController::class, 'showProduct21'])->name('/product21_tshirt/5');
// Route::get('/product22_tshirt/6', [ProductsController::class, 'showProduct22'])->name('/product22_tshirt/6');
// Route::get('/product23_tshirt/7', [ProductsController::class, 'showProduct23'])->name('/product23_tshirt/7');
// Route::get('/product24_tshirt/8', [ProductsController::class, 'showProduct24'])->name('/product24_tshirt/8');





Route::get('/{product_type}_{category}/{id}', [ProductsController::class, 'showProduct'])->name('main.product');