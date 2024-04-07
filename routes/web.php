<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BlogDetailsController;
use Illuminate\Support\Facades\Route;

//Route::middleware();
//login page.....
Route::get('/login', function () {
    return view('admin.login_signup.login_page');
})->name('main.login.page');

//register page......
Route::get('/register', function () {
    return view('admin.login_signup.register_page');
})->name('main.register.page');


//admin dashboard page........
Route::get('/admin/dashboard', function () {
    return view('admin.admin_layout.admin_dashboard');
})->name('admin.dashboard.file')->middleware(['auth','IsAdmin']);


//logout.......
Route::get('/logout', [\App\Http\Controllers\UserLogoutController::class, 'logout'])->name('user.logout.main');

//features list.........
//Route::get('/feature', function () {
////    $allPosts = Features::all();
//    return view('admin.feature_layout.feature');
//})
//blog page admin//......
Route::middleware(['auth', 'IsAdmin'])->group(function () {

    //admin feedback
    Route::get('/admin/feedback/',[\App\Http\Controllers\Admin\AdminFeedBackController::class,'index'])->name('admin-feed-back.index.page');
    Route::post('/admin/add/feedback',[\App\Http\Controllers\Admin\AdminFeedBackController::class,'store'])->name('admin-feed-back.store.db');

    Route::get('/admin/feedback/list',[\App\Http\Controllers\Admin\AdminFeedBackController::class,'listShow'])->name('admin-feed-back.list-show.page');
    Route::get('/delete/feedback/list/{id}',[\App\Http\Controllers\Admin\AdminFeedBackController::class,'destroy'])->name('admin-feed-back.destroy');

    Route::get('/admin/feedback/edit/{id}',[\App\Http\Controllers\Admin\AdminFeedBackController::class,'edit'])->name('admin.feedback.edit');
    Route::post('/admin/feedback/update',[\App\Http\Controllers\Admin\AdminFeedBackController::class,'update'])->name('admin-feed-back.update');


    //company mission//.......
    Route::get('/admin/company/mission',[\App\Http\Controllers\admin\AdminCompanyMissionController::class,'index'])->name('admin-company-mission.index');
    Route::post('/admin/company/mission',[\App\Http\Controllers\admin\AdminCompanyMissionController::class,'store'])->name('admin-company-mission.store.db');

    Route::get('/admin/company/mission/list',[\App\Http\Controllers\admin\AdminCompanyMissionController::class,'listShow'])->name('admin-company-mission.list-show');
    Route::get('/admin/company/mission/delete/{id}',[\App\Http\Controllers\admin\AdminCompanyMissionController::class,'destroy'])->name('admin-company-mission.destroy');

    Route::get('admin/company/mission/edit/{id}',[\App\Http\Controllers\admin\AdminCompanyMissionController::class,'edit'])->name('admin-company-mission.edit');
    Route::post('/admin/company/update',[\App\Http\Controllers\admin\AdminCompanyMissionController::class,'update'])->name('admin-company-mission.update');

    //sid//
//    Route::get('/admin/side/bar',[\App\Http\Controllers\admin\AdminSideBarController::class,'index'])->name('admin.side.bar.page');
    //room booking//
    Route::get('/admin/room/booking', [\App\Http\Controllers\admin\AdmindRoomBookingController::class, 'roomBooking'])->name('admin.roomBooking.page');

    //admin gallery//..
    Route::get('/admin/gallery/page',[\App\Http\Controllers\admin\AdminGalleryController::class,'index'])->name('admin.gallery.page');
    Route::post('/admin/gallery/store',[\App\Http\Controllers\admin\AdminGalleryController::class,'store'])->name('admin-gallery.store.db');

    //about us
    Route::get('/admin/about/us',[\App\Http\Controllers\admin\AboutUsAdminController::class,'index'])->name('about-us-admin.index');
    Route::post('/admin/aboutus/store/page',[\App\Http\Controllers\admin\AboutUsAdminController::class,'store'])->name('admin-us-about.store.db');

    Route::get('/admin/blog/add/page', [\App\Http\Controllers\admin\AdminBlogController::class, 'index'])->name('admin.blog.add.page');
    Route::post('admin/blog/store', [\App\Http\Controllers\admin\AdminBlogController::class, 'store'])->name('admin.blog.store');
//show blog list
    Route::get('/admin/show/blog/list', [\App\Http\Controllers\admin\AdminBlogController::class, 'viewList'])->name('admin.show.blog.list');
//delete blog list
    Route::get('/admin/blog/delete/{id}', [\App\Http\Controllers\admin\AdminBlogController::class, 'destroy'])->name('admin.blog.delete-id');
//edit blog list
    Route::get('/admin/edit/list/{id}', [\App\Http\Controllers\admin\AdminBlogController::class, 'edit'])->name('admin-blog.edit');
    Route::post('/admin/blog/update', [\App\Http\Controllers\admin\AdminBlogController::class, 'update'])->name('admin-blog.update');
//Add new feature......
    Route::post('/feature/add', [\App\Http\Controllers\admin\FeatureListController::class, 'store'])->name('feature.add.page');
    Route::get('/feature', [\App\Http\Controllers\admin\FeatureListController::class, 'featureList'])->name('feature.list.page');
    Route::get('/ge/feature', [\App\Http\Controllers\admin\FeatureListController::class, 'index'])->name('feature.list.page.index');
//delete list.......
    Route::get('/delete/feature/list/{id}', [\App\Http\Controllers\admin\FeatureListController::class, 'destroy'])->name('feature.delete.list');
//edit list.....
    Route::get('feature/edit/{id}', [\App\Http\Controllers\admin\FeatureListController::class, 'edit'])->name('feature.edit.list');
    Route::post('/edit/store', [\App\Http\Controllers\admin\FeatureListController::class, 'update'])->name('edit.store.new');

// facilities list......
    Route::get('/facilities', [\App\Http\Controllers\admin\FacilitiesController::class, 'facilitiesList'])->name('facilities.list.page');
//add new facilities
    Route::post('/facilities/add', [\App\Http\Controllers\admin\FacilitiesController::class, 'store'])->name('facilities.add.page');
    Route::get('/facilities/add/show', [\App\Http\Controllers\admin\FacilitiesController::class, 'index'])->name('facilities.add.show.page');
//delete facilities list.........
    Route::get('/delete/facilities/list/{id}', [\App\Http\Controllers\admin\FacilitiesController::class, 'destroy'])->name('delete.facilities.list');
//edit facilities list.....
    Route::get('/edit/facilities/{id}', [\App\Http\Controllers\admin\FacilitiesController::class, 'edit'])->name('edit.get.facilities');
    Route::post('/update/facilities', [\App\Http\Controllers\admin\FacilitiesController::class, 'update'])->name('edit.store.facilities');

    //add staff........
    Route::get('/add/staff/page', [\App\Http\Controllers\admin\OurStaffController::class, 'index'])->name('view.addStaff.page');
    Route::post('/add/staff/db', [\App\Http\Controllers\admin\OurStaffController::class, 'store'])->name('action.addStaff.db');
//staff list.......
    Route::get('/staff/list', [\App\Http\Controllers\admin\OurStaffController::class, 'stafflist'])->name('staff.list.page');
//staff delete.......
    Route::get('/staff/delete/list/{id}', [\App\Http\Controllers\admin\OurStaffController::class, 'destroy'])->name('staff.delete.list');
//edit staff list......
    Route::get('/staff/edit/list/{id}', [\App\Http\Controllers\admin\OurStaffController::class, 'edit'])->name('edit.staff.list');
    Route::post('/staff/update/', [\App\Http\Controllers\admin\OurStaffController::class, 'update'])->name('staff.update.list');

//room .......
    Route::get('/room/add/show/page', [\App\Http\Controllers\admin\RoomController::class, 'index'])->name('room.add.show.page');
    Route::post('/room/add/list', [\App\Http\Controllers\admin\RoomController::class, 'store'])->name('room.add.list.db');
//room list show......
    Route::get('/room/list/page', [\App\Http\Controllers\admin\RoomController::class, 'listShow'])->name('room.list.show.page');
//room lists delete........
    Route::get('/room/list/delete/{id}', [\App\Http\Controllers\admin\RoomController::class, 'destroy'])->name('delete.list.room');
//room edit.....
    Route::get('/edit/room/list/{id}', [\App\Http\Controllers\admin\RoomController::class, 'edit'])->name('edit.room.list');
    Route::post('/update/room/list', [\App\Http\Controllers\admin\RoomController::class, 'update'])->name('room.update.list.db');

//category..........
    Route::get('/category/room/input/page', [\App\Http\Controllers\admin\CategoryController::class, 'index'])->name('category.room.input');
    Route::post('/category/room/add', [\App\Http\Controllers\admin\CategoryController::class, 'store'])->name('category.room.add.db');
//category list show.....
    Route::get('/category/room/list', [\App\Http\Controllers\admin\CategoryController::class, 'listShowCategory'])->name('category.room.list');
//category delete......
    Route::get('/category/list/delete/{id}', [\App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('category.list.delete');
//category edit......
    Route::get('/category/edit/list/{id}', [\App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('category.edit.list');
    Route::post('/category/update/list', [\App\Http\Controllers\admin\CategoryController::class, 'update'])->name('category.update.lis');

//setting//.......
    Route::get('/setting', [\App\Http\Controllers\admin\SettingController::class, 'index'])->name('setting.index.page');
    Route::post('/setting/store', [\App\Http\Controllers\admin\SettingController::class, 'store'])->name('setting.store.page');


//Service//......
//add service page//...........
    Route::get('/admin/service/add', [\App\Http\Controllers\admin\OurServiceController::class, 'index'])->name('admin.service.add.page.show');
    Route::post('/admin/post/service', [\App\Http\Controllers\admin\OurServiceController::class, 'store'])->name('admin.post.service.page.db');
//show service list//......
    Route::get('/admin/service/list/show', [\App\Http\Controllers\admin\OurServiceController::class, 'ourServiceList'])->name('admin.service.list.show.page');
//service delete//......
    Route::get('/our/service/list/delete/{id}', [\App\Http\Controllers\admin\OurServiceController::class, 'destroy'])->name('admin.serviceList.delete');
//our service edit//......
    Route::get('/admin/edit/service/show/{id}', [\App\Http\Controllers\admin\OurServiceController::class, 'edit'])->name('admin.service.edit.page');
    Route::post('/admin/update/server/page', [\App\Http\Controllers\admin\OurServiceController::class, 'update'])->name('admin.server.update.page');
//Slider page//......
    Route::get('/slider/page/admin', [\App\Http\Controllers\admin\SliderAdminController::class, 'index'])->name('admin-slider.index');
    Route::post('/admin/slider/store', [\App\Http\Controllers\admin\SliderAdminController::class, 'store'])->name('admin-slider.store.db');

});
//register...login.......
Route::post('/user/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('admin.store.register');
Route::post('/user/login/check', [\App\Http\Controllers\UserLoginController::class, 'loginCheck'])->name('admin.login.check');


//our staff.......


//Front Eend..............
//about-us page/////.....

Route::get('/frontend/about/us', [\App\Http\Controllers\Frontend\FrontendAboutusController::class, 'about_us'])->name('frontend.about.us.showPage');
//contact_us page/////.....
Route::get('/frontend/contact/us', [\App\Http\Controllers\Frontend\FrontendContactusController::class, 'contact_us'])->name('frontend.contact.us.ShowPage');
//index page ///////........
Route::get('/', [\App\Http\Controllers\Frontend\FrontendIndexController::class, 'index'])->name('frontend.index.page');
//our gallery page/////'.......
Route::get('/frontend/our/gallery', [App\Http\Controllers\Frontend\FrontendOurGalleryController::class, 'ourGalley'])->name('frontend.our-gallery.page');
//our service////.......
Route::get('/frontend/our/service', [\App\Http\Controllers\Frontend\FrontendOurServiceController::class, 'ourService'])->name('frontend.our-service.page');
//ourStaff page////......
Route::get('/frontend/our/staff', [\App\Http\Controllers\Frontend\FrontendOurStaffsController::class, 'ourStaff'])->name('frontend.our.staff.page');
//room details//////...........
Route::get('/frontend/room/details/{id}', [\App\Http\Controllers\Frontend\FrontendRoomDetailsController::class, 'roomDetails'])->name('frontend.room.details.page');
//room grid////........
Route::get('/frontend/room/grid', [\App\Http\Controllers\Frontend\FrontendRoomGridController::class, 'roomGrid'])->name('frontend.room.grid.page');

///header index page////.......
///header index category page////.......
Route::get('/room-list/{id}', [\App\Http\Controllers\Frontend\FrontendHeaderController::class, 'roomList'])->name('roomList');

Route::post('/room/booking', [\App\Http\Controllers\Frontend\FrontendRoomBookingController::class, 'store'])->name('room.booking.list')->middleware(['auth','IsUsers']);


//room booking search is available??//.........
Route::get('/room/search', [\App\Http\Controllers\Frontend\FrontendRoomBookingController::class, 'roomSearch'])->name('room.search');

//fontend blog list...........
Route::get('/blog/list', [BlogController::class, 'blogFunction'])->name('blog.list');
//blog details
//Route::get('/blog/list/details/{id}',[BlogController::class])

//fontend blog Details.....
Route::get('/blog/details/{id}', [BlogDetailsController::class, 'blogDetailsFunction'])->name('blog.details');

//room category
Route::get('/blog/page/roomCategory', [BlogController::class, 'roomDetails'])->name('blog.page.roomCategory');

//about us frontend//.....
Route::get('/user/about/us',[\App\Http\Controllers\Frontend\FrontendAboutusController::class,'about_us'])->name('user.about.us.page');


Route::middleware(['auth', 'IsUsers'])->group(function () {



    Route::get('/user/dashboard', [\App\Http\Controllers\user\UserDashboardController::class, 'dashboard'])->name('user.dashboard.page');
//        Route::get('/user/dashboard',[\App\Http\Controllers\user\UserDashboardController::class,'dashboard'])->name('user.dashboard.page');
//user login details//.......
//    Route::get('/user/details',[\App\Http\Controllers\UserDashboardController::class,'userLoginDetails'])->name('user-login.user-login-details');
    Route::get('/user/details', [\App\Http\Controllers\user\UserDashboardController::class, 'userLoginDetails'])->name('user-login.user-login-details');
});
//    Route::get('/user/dashboard',[\App\Http\Controllers\user\UserDashboardController::class,'dashboard'])->name('user.dashboard.page');
////user login details//.......
////    Route::get('/user/details',[\App\Http\Controllers\UserDashboardController::class,'userLoginDetails'])->name('user-login.user-login-details');
//    Route::get('/user/details',[\App\Http\Controllers\user\UserDashboardController::class,'userLoginDetails'])->name('user-login.user-login-details');


//room booking //..........
//Route::get('/room/booking/{id}',[\App\Http\Controllers\Frontend\FrontendRoomBookingController::class,'']);

//Route::middleware('auth')->group(function () {
//    Route::post('/room/booking', [\App\Http\Controllers\Frontend\FrontendRoomBookingController::class, 'store'])->name('room.booking.list');
//});
// room booking Admin page/////..........

//Route::get('/admin/roomBooking/dashboard', function () {
//    return view('admin.admin_layout.admin_dashboard');
//})

//Route::get('/admin/room/booking',[\App\Http\Controllers\admin\AdmindRoomBookingController::class,'roomBooking'])->name('admin.roomBooking.page')->middleware('auth');
////room booking search is available??//.........
//Route::get('/room/search',[\App\Http\Controllers\Frontend\FrontendRoomBookingController::class,'roomSearch'])->name('room.search');

//Route::middleware(['auth'])->group(function (){
//    //user page starts//...............
//    Route::get('/user/dashboard',[\App\Http\Controllers\user\UserDashboardController::class,'dashboard'])->name('user.dashboard.page');
////user login details//.......
////    Route::get('/user/details',[\App\Http\Controllers\UserDashboardController::class,'userLoginDetails'])->name('user-login.user-login-details');
//    Route::get('/user/details',[\App\Http\Controllers\user\UserDashboardController::class,'userLoginDetails'])->name('user-login.user-login-details');
//});



