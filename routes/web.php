<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
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


Route::resource('mahasiswa', MahasiswaController::class);


Route::get('/data/search', function () {
    $search = request('search');
            $mahasiswa = DB::table('mahasiswa')->where('nama', 'like', '%' . $search . '%')->paginate(5);
            return view('mahasiswa.index', compact('mahasiswa'));
            
});