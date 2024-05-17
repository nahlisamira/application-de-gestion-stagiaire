<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\EncadrantsController;
use App\Http\Controllers\AffecterController;
use App\Http\Controllers\AbsenceController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home',function(){
        return view('home');
    });
    
    Route::resource('employes', EmployesController::class);
    // routes/web.php
    Route::get('/employes/affecter/{cin}', [EmployesController::class, 'affecter'])->name('employes.affecter');

    Route::get('/employes/{id}/vacation', [EmployesController::class, 'vacationRequest'])
        ->name('vacation.request');

    // Route pour demander un certificat pour un employé spécifique
    Route::get('/employes/{id}/certificate', [EmployesController::class, 'certificateRequest'])
        ->name('certificate.request');
    
    Route::resource('encadrants', EncadrantsController::class);
    Route::delete('/encadrants/{id}', [EncadrantsController::class, 'destroy'])->name('encadrants.destroy');
    Route::resource('affecter', AffecterController::class);

    Route::resource('absences', AbsenceController::class);

});
