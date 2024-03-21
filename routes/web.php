<?php

use App\Livewire\CreatePost as CreatePostIndex ;
use App\Livewire\First\Website as WebsiteIndex ;
use App\Livewire\TaskManagement\Index as TaskIndex;
use App\Livewire\UserManagement\Index as UserManagementIndex;
use App\Livewire\LogRecords\Log as LogRecordsLog;
use App\Livewire\ActivityMonitoring\Index as ActivityMonitoringIndex;


use Illuminate\Support\Facades\Route;
use Monolog\LogRecord;

use function Laravel\Prompts\table;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', CreatePostIndex::class)->name('index');
Route::get('/jas', WebsiteIndex::class)->name('jas');
Route::get('/task', TaskIndex::class)->name('task');
Route::get('/user-management', UserManagementIndex::class)->name('user-management');
Route::get('/log', LogRecordsLog::class)->name('log');
Route::get('/act-monitor', ActivityMonitoringIndex::class)->name('act-monitor');




