<?php

use App\Http\Controllers\PSMCoordinatorController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ReportController;
use App\Http\Controllers\Evaluator\EvaluatorController;
use App\Http\Controllers\RubricController;

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

    /*
|--------------------------------------------------------------------------
| PSM COORDINATOR (MANAGETOP20 MODULE)
|--------------------------------------------------------------------------
*/
    Route::get('PSMCoordinatorHomepage', function () {
        return view('manageTop20/PSMCoordinatorHomepage');
    });
    
    //route to view evaluation marks page
    /*Route::get('viewMarks', function () {
        return view('manageTop20/viewMarks');
    });*/
    Route::get('viewMarks','App\Http\Controllers\EvaluationMarksController@viewMarks');

    //route to generate top 20 students
    Route::get('generateTop','App\Http\Controllers\Top20Controller@generateTop');
    
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

    //view existing evaluation dates
    Route::get('manageEvaluationDate','App\Http\Controllers\ScheduleController@viewEvDate');

    //add evaluation date into database (create)
    Route::post('/scheduleData/addEvDate', 'App\Http\Controllers\ScheduleController@addEvDate');

    //randomly assign evalution dates to top 20 students
    Route::get('assignSlot', 'App\Http\Controllers\ScheduleController@assignSlot');

  /*
|--------------------------------------------------------------------------
| PSM COORDINATOR (MANAGE TOP20 MODULE END)
|--------------------------------------------------------------------------
*/


 /*
|--------------------------------------------------------------------------
| PSM COORDINATOR (REPORT MODULE)
|--------------------------------------------------------------------------
*/

Route::get('reportDashboard', function () {
    return view('ReportModule/reportDashboard');
});

Route::get('AddReport', function () {
    return view('ReportModule/AddReport');
});

Route::get('tryindex', function () {
    return view('ReportModule/tryindex');
});

Route::get('/reportdata','App\Http\Controllers\ReportController@ReportPage');
Route::post('reportdata/create','App\Http\Controllers\ReportController@createReport');
Route::get('/reportdata/{id}/EditReport','App\Http\Controllers\ReportController@EditReport');
Route::post('/reportdata/{id}/update','App\Http\Controllers\ReportController@updateReport');

Route::get('ExcellentStudent','App\Http\Controllers\ReportController@ExcellentStudent');

Route::get('StudentProgress','App\Http\Controllers\ReportController@StudentProgress');
Route::get('/80data/Above80','App\Http\Controllers\ReportController@Above80');
Route::get('/70data/Above70','App\Http\Controllers\ReportController@Above70');
Route::get('/60data/Above60','App\Http\Controllers\ReportController@Above60');
Route::get('/50data/Above50','App\Http\Controllers\ReportController@Above50');
Route::get('/40data/Above40','App\Http\Controllers\ReportController@Above40');
Route::get('/0data/Below40','App\Http\Controllers\ReportController@Below40');

/*
|--------------------------------------------------------------------------
| PSM COORDINATOR (REPORT MODULE END)
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| PSM COORDINATOR (Rubric MODULE )
|--------------------------------------------------------------------------
*/



   //route to rubric mainpage
   Route::get('/rubricdata','App\Http\Controllers\RubricController@viewRubric');


  
    Route::get('HomePage', function () {
        return view('managerubric/HomePage');
    });

   //route to AddRubric
     Route::get('AddRubric', function () {
        return view('managerubric/AddRubric');
    });

   
 Route::post('rubricdata/create','App\Http\Controllers\RubricController@createRubric');
    //read
   
 Route::get('filterPSM1','App\Http\Controllers\RubricController@filterPSM1');
 Route::get('viewPSM2','App\Http\Controllers\RubricController@viewPSM2');
 Route::get('viewPTA','App\Http\Controllers\RubricController@viewPTA');
     //edit form
Route::get('/rubricdata/{id}/edit','App\Http\Controllers\RubricController@EditRubric');

//update
Route::post('/rubricdata/{id}/update','App\Http\Controllers\RubricController@update');

//delete
Route::get('/rubricdata/{id}/delete','App\Http\Controllers\RubricController@delete');
/*
|--------------------------------------------------------------------------
| END PSM COORDINATOR (Rubric MODULE )
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| PSM COORDINATOR (Evaluation details and marks MODULE )
|--------------------------------------------------------------------------
*/

   //route to Evaluation details and marks main page
    Route::get('EvaluationMainPage', function () {
        return view('ManageEvaluationDetailsAndMarks/EvaluationMainPage');
    });

   //route to AddEvaluation
     Route::get('AddEvaluation', function () {
        return view('ManageEvaluationDetailsAndMarks/AddEvaluation');
    });

    //route to SubmitMarks
    Route::get('DeleteEvaluation', function () {
        return view('ManageEvaluationDetailsAndMarks/DeleteEvaluation');
        });

     //route to SubmitMarks
     Route::get('SubmitMarks', function () {
        return view('ManageEvaluationDetailsAndMarks/SubmitMarks');
    });

    Route::post('markdata/create','App\Http\Controllers\MarksController@SubmitMarks');//add


/*
|--------------------------------------------------------------------------
| END PSM COORDINATOR (Evaluation details and Marks MODULE )
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| START PSM COORDINATOR (FYPDetails MODULE )
|--------------------------------------------------------------------------
*/
    
    //Route::resource('FYPdetails', 'FYPDetailsController');//1 argument from views//route to rubric mainpage
    Route::get('/fypdata','App\Http\Controllers\FYPDetailsController@viewFYPDetails');
    
    //route to FYP mainpage
    Route::get('FYPMainPage', function () {
        return view('ManageFYPDetails/FYPMainPage');
    });


   //route to AddFYPDetails
     Route::get('AddFYPDetails', function () {
        return view('ManageFYPDetails/AddFYPDetails');
    });

    Route::post('fypdata/create','App\Http\Controllers\FYPDetailsController@createFYPDetails');//add
    //read

    Route::get('/fypdata/search', 'App\Http\Controllers\FYPDetailsController@searchFYPDetails');//search and view

    Route::get('/edit/{id}', 'App\Http\Controllers\FYPDetailsController@editFYPDetails');//edit

    Route::put('/update/{id}', 'App\Http\Controllers\FYPDetailsController@updateFYPDetails');//update

    Route::get('/delete/{id}','App\Http\Controllers\FYPDetailsController@deleteFYPDetails');
    
    /* //route to EditFYPDetails
    Route::get('EditFYPDetails', function () {
        return view('ManageFYPDetails/EditFYPDetails');
    });

     //route to ViewFYPDetails
    Route::get('ViewFYPDetails', function () {
        return view('ManageFYPDetails/ViewFYPDetails');
    });
     //route to ViewDeleteFYPDetails
     Route::get('ViewDeleteFYPDetails', function () {
        return view('ManageFYPDetails/ViewDeleteFYPDetails');
    }); */

/*
/*
|--------------------------------------------------------------------------
| END PSM COORDINATOR (FYPDetails MODULE )
|--------------------------------------------------------------------------
*/

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
/*
    |--------------------------------------------------------------------------
    | STUDENT (MANAGE RUBRIC)
    |--------------------------------------------------------------------------
    */
 Route::get('StsvView','App\Http\Controllers\RubricController@StdviewRubric');
 Route::get('sfilterPSM1','App\Http\Controllers\RubricController@sfilterPSM1');
 Route::get('sviewPSM2','App\Http\Controllers\RubricController@sviewPSM2');
 Route::get('sviewPTA','App\Http\Controllers\RubricController@sviewPTA');

    /*
    |--------------------------------------------------------------------------
    | STUDENT (MANAGETOP20 MODULE START)
    |--------------------------------------------------------------------------
    */

    //route to student evaluation schedule page
    Route::get('studentEvaluationSchedule','App\Http\Controllers\ScheduleController@viewStudSchedule');
    // Route::get('studentEvaluationSchedule', function () {
    //     return view('manageTop20/studentEvaluationSchedule');
    // });

    //route to confirm attendance page
    Route::get('/scheduleData/{id}/viewEvaluationDateDetails','App\Http\Controllers\ScheduleController@viewEvaluationDateDetails');
    // Route::get('confirmAttendance', function () {
    //     return view('manageTop20/confirmAttendance');
    // });

    //route to update evaluation date 
    Route::post('/scheduleData/{id}/updateEvaDateDetails','App\Http\Controllers\ScheduleController@updateEvaDateDetails');

    //route to delete evaluation date
    Route::get('/scheduleData/{id}/deleteEvDate','App\Http\Controllers\ScheduleController@deleteEvDate');

    //route to slot change page
    // Route::get('slotChange', function () {
    //     return view('manageTop20/slotChange');
    // });

    //route to confirm attendance status
    Route::post('/scheduleData/{id}/attendanceStats','App\Http\Controllers\ScheduleController@attendanceStats');

    /*
    |--------------------------------------------------------------------------
    | STUDENT (MANAGETOP20 MODULE END)
    |--------------------------------------------------------------------------
    */
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
| PSM COORDINATOR LOGIN
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'coordinator','middleware'=>['Coordinator','auth']],function(){
    Route::get('dashboard',[PSMCoordinatorController::class,'homepage'])->name('coordinator.dashboard');
    Route::get('profile',[PSMCoordinatorController::class,'profile'])->name('coordinator.profile');
    Route::get('settings',[PSMCoordinatorController::class,'settings'])->name('coordinator.settings');
    Route::get('settings',[PSMCoordinatorController::class,'settings'])->name('coordinator.settings');
   
}); 

/*
|--------------------------------------------------------------------------
| STUDENT LOGIN
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'student','middleware'=>['Student','auth']],function(){
    Route::get('dashboard',[StudentController::class,'homepage'])->name('student.dashboard');
    Route::get('profile',[StudentController::class,'profile'])->name('student.profile');
    Route::get('settings',[StudentController::class,'settings'])->name('student.settings');
}); 
  
/*
|--------------------------------------------------------------------------
| EVALUATOR LOGIN
|--------------------------------------------------------------------------
*/

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


/*
|--------------------------------------------------------------------------
| EVALUATOR 
|--------------------------------------------------------------------------
*/
//Evaluator
Route::get('Reminder', function () {
    return view('ManageReminder/viewReminder');
});


/*

|--------------------------------------------------------------------------
| Evaluator (MANAGE RUBRIC)
|--------------------------------------------------------------------------
*/
Route::get('EvalView','App\Http\Controllers\RubricController@EvaviewRubric');
Route::get('efilterPSM1','App\Http\Controllers\RubricController@efilterPSM1');
Route::get('eviewPSM2','App\Http\Controllers\RubricController@eviewPSM2');
Route::get('eviewPTA','App\Http\Controllers\RubricController@eviewPTA');