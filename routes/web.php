<?php



use App\Http\Controllers\ConsultationFormController;
use App\Http\Controllers\NotificationsController;
use App\Http\Resources\ConsultationFormResource;
use App\Livewire\Forms\ConsultationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/consultation/request', ConsultationForm::class)->middleware('auth:sanctum')->name('consultation.request');
Route::resource('/consultation', ConsultationFormController::class)->middleware('auth:sanctum')
    ->only(['store', 'index', 'show', 'update', 'destroy'])
->name('store', 'consultation.store');
Route::resource('/notifications', NotificationsController::class)->middleware('auth:sanctum');
