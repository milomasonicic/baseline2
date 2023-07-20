<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Display a paginated list of books with their details (e.g., title, author, price)
Route::get('/dashboard', function () {
    return view('dashboard', ["books"=>Book::paginate(5)]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("dashboard/{id}", [BookController::class, "show"])->name("books.oneBook");

//Implement a form to add new books to the system.
//Include appropriate validation rules for fields like title, author, price, etc.
Route::get("create", [BookController::class, "create"])->name("books.createBook");
//storeBook
Route::post("create", [BookController::class, "store"])->name("books.storeBook");

//book.edit
Route::get("bookEdit/{id}", [BookController::class, "edit"])->name("book.edit");
//update
Route::put("bookEdit/{id}", [BookController::class, "update"])->name("book.update");

//delete
Route::delete("bookDelete/{id}", [BookController::class, "delete"])->name("book.delete");

require __DIR__.'/auth.php';
