<?php

use App\Http\Controllers\PSMCoordinatorController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Evaluator\EvaluatorController;


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



//route to login
//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/', function () {
     return view('index');
 });
/*
|--------------------------------------------------------------------------
| PSM COORDINATOR
|--------------------------------------------------------------------------
*/

//restrict access to PSM Coordinator only
//Route::middleware(['coordinatorRestricted:coordinator@gmail.com'])->group(function(){
    //PSM coordinator home
    Auth::routes();

    //Route::get('/PSMCoordinatorHomepage', [App\Http\Controllers\HomeController::class, 'coordinatorHome'])->name('PSMCoordinatorHomepage');

    //redirect to PSM coordinator homepage after login
    //Route::get('/PSMCoordinatorHomepage', 'CoordinatorController@index')->name('PSMCoordinator');

    //route to PSM Coordinator Homepage
    Route::get('PSMCoordinatorHomepage', function () {
        return view('manageTop20/PSMCoordinatorHomepage');
    });
    
    //route to view evaluation marks page
    /*Route::get('viewMarks', function () {
        return view('manageTop20/viewMarks');
    });*/
    Route::get('viewMarks','App\Http\Controllers\EvaluationMarksController@viewMarks');
    
    //route to industry evaluation mainpage
    Route::get('industryEvaluationMainpage', function () {
        return view('manageTop20/industryEvaluationMainpage');
    });

    //route to evaluation schedule page
    /*Route::get('evaluationSchedule', function () {
        return view('manageTop20/evaluationSchedule');
    });*/
    Route::get('evaluationSchedule','App\Http\Controllers\ScheduleController@viewSchedule');

    //route to manage evaluation date page
    Route::get('manageEvaluationDate', function () {
        return view('manageTop20/manageEvaluationDate');
    });


   //route to rubric mainpage
    
    Route::get('HomePage', function () {
        return view('managerubric/HomePage');
    });

   //route to AddRubric
     Route::get('AddRubric', function () {
        return view('managerubric/AddRubric');
    });

      //route to EditDeleteRubric
    Route::get('EditDeleteRubric', function () {
        return view('managerubric/EditDeleteRubric');
    });

     //route to ViewRubric
    Route::get('ViewRubric', function () {
        return view('managerubric/ViewRubric');
    });

//});

/*
|--------------------------------------------------------------------------
| STUDENT
|--------------------------------------------------------------------------
*/

//restrict access to students only
//Route::middleware(['studentRestricted:student@gmail.com'])->group(function(){
    //student home
    //Auth::routes();

    //Route::get('/studentHomepage', [App\Http\Controllers\HomeController::class, 'studentHome'])->name('studentHomepage');

    //redirect to student homepage after login
    //Route::get('/StudentHomepage', 'StudentController@index')->name('Student');

    //route to student homepage
    Route::get('studentHomepage', function () {
        return view('manageTop20/studentHomepage');
    });

    //route to student evaluation schedule page
    Route::get('studentEvaluationSchedule', function () {
        return view('manageTop20/studentEvaluationSchedule');
    });

    //route to confirm attendance page
    Route::get('confirmAttendance', function () {
        return view('manageTop20/confirmAttendance');
    });

    //route to slot change page
    Route::get('slotChange', function () {
        return view('manageTop20/slotChange');
    });
//});

//home
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//redirect users based on Role
//Route::get('/PSMCoordinatorHomepage', 'CoordinatorController@index')->name('psmcoordinator')->middleware('psmcoordinator');
//Route::get('/psmevaluator', 'EvaluatorController@index')->name('psmevaluator')->middleware('psmevaluator');
//Route::get('/studentHomepage', 'StudentController@index')->name('student')->middleware('student');


/*
|--------------------------------------------------------------------------
| PSM COORDINATOR
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'coordinator','middleware'=>['Coordinator','auth']],function(){
    Route::get('dashboard',[PSMCoordinatorController::class,'homepage'])->name('coordinator.dashboard');
    Route::get('profile',[PSMCoordinatorController::class,'profile'])->name('coordinator.profile');
    Route::get('settings',[PSMCoordinatorController::class,'settings'])->name('coordinator.settings');
  
}); 

/*
|--------------------------------------------------------------------------
| STUDENT
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'student','middleware'=>['Student','auth']],function(){
    Route::get('dashboard',[StudentController::class,'homepage'])->name('student.dashboard');
    Route::get('profile',[StudentController::class,'profile'])->name('student.profile');
    Route::get('settings',[StudentController::class,'settings'])->name('student.settings');
}); 
      

Route::prefix('evaluator')->name('evaluator.')->group(function(){

    Route::middleware(['guest:evaluator'])->group(function(){
         Route::view('/login','evaluator.login')->name('login');
         Route::view('/register','evaluator.register')->name('register');
         Route::post('/create',[EvaluatorController::class,'create'])->name('create');
         Route::post('/check',[EvaluatorController::class,'check'])->name('check');
    });


    Route::middleware(['auth:evaluator'])->group(function(){
         Route::view('/dashboard','evaluator.dashboard')->name('dashboard');
         Route::post('logout',[EvaluatorController::class,'logout'])->name('logout');
     
    });
});
