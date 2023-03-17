<?php

use Illuminate\Support\Facades\Route;


//login page.....
Route::get('/login', function () {
    return view('admin.login_Signup.login_page');
})->name('main.login.page');

//register page......
Route::get('/register', function () {
    return view('admin.login_Signup.register_page');
})->name('main.register.page');



//admin dashboard page........
Route::get('/admin/dashboard', function () {
    return view('admin.admin_layout.admin_dashboard');
})->name('admin.dashboard.file')->middleware('auth');

//logout.......
Route::get('/logout',[\App\Http\Controllers\UserLogoutController::class,'logout'])->name('user.logout.main');

//features list.........
//Route::get('/feature', function () {
////    $allPosts = Features::all();
//    return view('admin.feature_layout.feature');
//})

//Add new feature......
Route::post('/feature/add',[\App\Http\Controllers\admin\FeatureListController::class,'store'])->name('feature.add.page');
Route::get('/feature',[\App\Http\Controllers\admin\FeatureListController::class,'featureList'])->name('feature.list.page');
Route::get('/ge/feature',[\App\Http\Controllers\admin\FeatureListController::class,'index'])->name('feature.list.page.index');
//delete list.......
Route::get('/delete/feature/list/{id}',[\App\Http\Controllers\admin\FeatureListController::class,'destroy'])->name('feature.delete.list');
//edit list.....
Route::get('feature/edit/{id}',[\App\Http\Controllers\admin\FeatureListController::class,'edit'])->name('feature.edit.list');
Route::post('/edit/store',[\App\Http\Controllers\admin\FeatureListController::class,'update'])->name('edit.store.new');

// facilities list......
Route::get('/facilities',[\App\Http\Controllers\admin\FacilitiesController::class,'facilitiesList'])->name('facilities.list.page');
//add new facilities
Route::post('/facilities/add',[\App\Http\Controllers\admin\FacilitiesController::class,'store'])->name('facilities.add.page');
Route::get('/facilities/add/show',[\App\Http\Controllers\admin\FacilitiesController::class,'index'])->name('facilities.add.show.page');
//delete facilities list.........
Route::get('/delete/facilities/list/{id}',[\App\Http\Controllers\admin\FacilitiesController::class,'destroy'])->name('delete.facilities.list');
//edit facilities list.....
Route::get('/edit/facilities/{id}',[\App\Http\Controllers\admin\FacilitiesController::class,'edit'])->name('edit.get.facilities');
Route::post('/update/facilities',[\App\Http\Controllers\admin\FacilitiesController::class,'update'])->name('edit.store.facilities');
//register...login.......
Route::post('/user/register',[\App\Http\Controllers\RegisterController::class,'store'])->name('admin.store.register');
Route::post('/user/login/check',[\App\Http\Controllers\UserLoginController::class,'loginCheck'])->name('admin.login.check');


//our staff.......

//add staff........
Route::get('/add/staff/page',[\App\Http\Controllers\admin\OurStaffController::class,'index'])->name('view.addStaff.page');
Route::post('/add/staff/db',[\App\Http\Controllers\admin\OurStaffController::class,'store'])->name('action.addStaff.db');
//staff list.......
Route::get('/staff/list',[\App\Http\Controllers\admin\OurStaffController::class,'stafflist'])->name('staff.list.page');
//staff delete.......
Route::get('/staff/delete/list/{id}',[\App\Http\Controllers\admin\OurStaffController::class,'destroy'])->name('staff.delete.list');
//edit staff list......
Route::get('/staff/edit/list/{id}',[\App\Http\Controllers\admin\OurStaffController::class,'edit'])->name('edit.staff.list');
Route::post('/staff/update/',[\App\Http\Controllers\admin\OurStaffController::class,'update'])->name('staff.update.list');

//room .......
Route::get('/room/add/show/page',[\App\Http\Controllers\admin\RoomController::class,'index'])->name('room.add.show.page');
Route::post('/room/add/list',[\App\Http\Controllers\admin\RoomController::class,'store'])->name('room.add.list.db');
//room list show......
Route::get('/room/list/page',[\App\Http\Controllers\admin\RoomController::class,'listShow'])->name('room.list.show.page');
//room lists delete........
Route::get('/room/list/delete/{id}',[\App\Http\Controllers\admin\RoomController::class,'destroy'])->name('delete.list.room');
//room edit.....
Route::get('/edit/room/list/{id}',[\App\Http\Controllers\admin\RoomController::class,'edit'])->name('edit.room.list');
Route::post('/update/room/list',[\App\Http\Controllers\admin\RoomController::class,'update'])->name('room.update.list.db');

//category..........
Route::get('/category/room/input/page',[\App\Http\Controllers\admin\CategoryController::class,'index'])->name('category.room.input');
Route::post('/category/room/add',[\App\Http\Controllers\admin\CategoryController::class,'store'])->name('category.room.add.db');
//category list show.....
Route::get('/category/room/list',[\App\Http\Controllers\admin\CategoryController::class,'listShowCategory'])->name('category.room.list');
//category delete......
Route::get('/category/list/delete/{id}',[\App\Http\Controllers\admin\CategoryController::class,'destroy'])->name('category.list.delete');
//category edit......
Route::get('/category/edit/list/{id}',[\App\Http\Controllers\admin\CategoryController::class,'edit'])->name('category.edit.list');
Route::post('/category/update/list',[\App\Http\Controllers\admin\CategoryController::class,'update'])->name('category.update.lis');
