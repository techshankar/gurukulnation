<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\TestmonialsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\FaqsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get('/check_prices', function () {
//     return view('frontend.check_prices');
// });
// Route::get('/signin', function () {
//     return view('frontend.login');
// })->name('signin');
// Route::get('/verifyOtp', function () {
//     return view('frontend.signup-2');
// })->name('verifyOtp');
// Route::get('/signup-1', function () {
//     return view('frontend.signup-1');
// });
// Route::get('/signup-2', function () {
//     return view('frontend.signup-2');
// });
// Route::get('/signup', function () {
//     return view('frontend.signup-3');
// })->name('signup');

//Auth routes
Route::middleware(['prefix'=>'admin'],['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/', [HomeController::class,'index'])->name('/');
// Route::post('/sendOtp',[UserController::class,'sendOtp'])->name('user.sendOtp');
// Route::post('/verifyOtp',[UserController::class,'verifyOtp'])->name('user.verifyOtp');
// Route::post('/login',[UserController::class,'login'])->name('user.login');
// Route::post('/register',[UserController::class,'register'])->name('user.register');
// Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

Route::group(['prefix'=>'admin'],  function(){
    Route::get('/',[AdminController::class,'viewLogin'])->name('admin');
    Route::post('/login',[LoginController::class,'login'])->name('admin.login');
});

// Route::group(['prefix'=>'packers-n-movers'],  function(){
//     Route::get('/',[PackerMoverController::class,'index'])->name('packers-n-movers');
//     Route::post('/save',[PackerMoverController::class,'save'])->name('form-1');
//     Route::get('/packers-and-movers-step1',[PackerMoverController::class,'step1'])->name('step1');
//     Route::post('/saveStep1',[PackerMoverController::class,'saveStep1'])->name('saveStep1');
//     Route::get('/packers-and-movers-step2',[PackerMoverController::class,'step2'])->name('step2');
//     Route::get('/fetchItems',[PackerMoverController::class,'fetchItems'])->name('fetchItems');
//     Route::get('/addToCart',[PackerMoverController::class,'addToCart'])->name('addToCart');
//     Route::get('/updateCart',[PackerMoverController::class,'updateCart'])->name('updateCart');
//     Route::get('/viewCart',[PackerMoverController::class,'viewCart'])->name('viewCart');
//     Route::get('/step3',[PackerMoverController::class,'step3'])->name('step3');
//     Route::get('/confirm-booking',[PackerMoverController::class,'confirmBooking'])->name('confirm-booking');

// });


// Route::group(['prefix'=>'road-side-assist'],  function(){
//     Route::get('/',[RoadSideAssistanceController::class,'index'])->name('road-side-assist');
//     Route::get('/save-vehicle',[RoadSideAssistanceController::class,'saveVehicle'])->name('save-vehicle');
//     Route::post('/save-details',[RoadSideAssistanceController::class,'saveDetails'])->name('save-details');
//     Route::post('/update-details',[RoadSideAssistanceController::class,'updateDetails'])->name('update-details');
// });

// Route::group(['prefix'=>'home-service'],  function(){
//     Route::get('/',[HomeServiceController::class,'index'])->name('home-service');
//     Route::get('/fetchData',[HomeServiceController::class,'fetchData'])->name('fetchData');
//     Route::get('/listing/{slug}',[HomeServiceController::class,'listing']);

// });



Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('news/letter/list',[AdminController::class,'newsLetterList'])->name('admin.newsletterlist');
        Route::get('contact/list',[AdminController::class,'contactList'])->name('admin.contact');
        Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
        Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
        Route::post('settings/update',[AdminController::class,'settingsUpdate'])->name('admin.settings_update');


        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');

        Route::get('homepage',[HomepageController::class,'index'])->name('admin.homepage');
        Route::post('homepagebanners',[HomepageController::class,'packersMovers'])->name('admin.homepagebanners');
        Route::get('banners',[HomepageController::class,'banners'])->name('admin.banners');
        Route::get('banner_list',[HomepageController::class,'banner_list'])->name('admin.banner_list');
// main banners
        Route::get('main_banner',[HomepageController::class,'mainBannerForm'])->name('admin.main_banner');
        Route::post('upload_main_banners',[HomepageController::class,'uploadMainBanners'])->name('admin.upload_main_banners');

// our story and mission
        Route::get('our/story/and/mission',[HomepageController::class,'ourStoryNMissionForm'])->name('admin.our_story_and_mission');
        Route::post('our/story/and/mission/update',[HomepageController::class,'ouStoryAndMissionUpdate'])->name('admin.our_story_and_mission_update');

// about
        Route::get('about-us',[HomepageController::class,'aboutForm'])->name('admin.about');
        Route::post('about-us/update',[HomepageController::class,'aboutUpdate'])->name('admin.about_update');

        // how_gurukul_nation_work
        Route::get('how/gurukul/nation/work',[HomepageController::class,'howGurukulNationWorkForm'])->name('admin.how_gurukul_nation_work');
        Route::post('how_gurukul_nation_work/update',[HomepageController::class,'howGurukulNationWorkUpdate'])->name('admin.how_gurukul_nation_work_update');
        
        // why_gurukul_nation
        Route::get('why/gurukul/nation',[HomepageController::class,'whyGurukulNationForm'])->name('admin.why_gurukul_nation');
        Route::post('why_gurukul_nation/update',[HomepageController::class,'whyGurukulNationUpdate'])->name('admin.why_gurukul_nation_update');

        // termsncondandprvcypolicy
        Route::get('termsncondandprvcypolicy',[HomepageController::class,'termsncondandprvcypolicyForm'])->name('admin.termsncondandprvcypolicy');
        Route::post('termsncondandprvcypolicy/update',[HomepageController::class,'termsncondandprvcypolicyUpdate'])->name('admin.termsncondandprvcypolicy_update');

// course category 
        Route::get('category',[categoryController::class,'index'])->name('admin.category');
        Route::get('addcategory',[categoryController::class,'addcategory'])->name('admin.addcategory');
        Route::post('savecategory',[categoryController::class,'savecategory'])->name('admin.savecategory');
        Route::get('editcategory/{id}',[categoryController::class,'editcategory'])->name('admin.editcategory');
        Route::get('deletecategory/{id}',[categoryController::class,'deletecategory'])->name('admin.deletecategory');
        Route::post('updatecategory/{id}',[categoryController::class,'updatecategory'])->name('admin.updatecategory');

        // Blogs 
        Route::get('blogs',[BlogController::class,'index'])->name('admin.blogs');
        Route::get('add/blog/form',[BlogController::class,'addBlogForm'])->name('admin.addBlog');
        Route::get('fetchCategory',[BlogController::class,'fetchCategory'])->name('admin.fetchCategory');
        Route::post('saveBlog',[BlogController::class,'saveBlog'])->name('admin.saveBlog');
        Route::get('edit/blog/{id}',[BlogController::class,'editBlog'])->name('admin.editBlog');
        Route::post('updateBlog/{id}',[BlogController::class,'updateBlog'])->name('admin.updateBlog');
        Route::get('deleteBlog/{id}',[BlogController::class,'deleteBlog'])->name('admin.deleteBlog');
        
        // Services 
        Route::get('services',[ServiceController::class,'index'])->name('admin.services');
        Route::get('add/service/form',[ServiceController::class,'addServiceForm'])->name('admin.addService');
        Route::post('save/service',[ServiceController::class,'saveService'])->name('admin.saveService');
        Route::get('edit/service/{id}',[ServiceController::class,'editService'])->name('admin.editService');
        Route::post('updateService/{id}',[ServiceController::class,'updateService'])->name('admin.updateService');
        Route::get('deleteService/{id}',[ServiceController::class,'deleteService'])->name('admin.deleteService');
       
        // courses 
        Route::get('courses',[CoursesController::class,'index'])->name('admin.courses');
        Route::get('add/course/form',[CoursesController::class,'addCourseForm'])->name('admin.addCourse');
        Route::post('save/course',[CoursesController::class,'saveCourse'])->name('admin.saveCourse');
        Route::get('edit/course/{id}',[CoursesController::class,'editCourse'])->name('admin.editCourse');
        Route::post('/update/course/{id}',[CoursesController::class,'updateCourse'])->name('admin.updateCourse');
        Route::get('delete/course/{id}',[CoursesController::class,'deleteCourse'])->name('admin.deleteCourse');
        
        // videos 
        Route::get('videos',[VideoController::class,'index'])->name('admin.video');
        Route::get('add/video/form',[VideoController::class,'addVideoForm'])->name('admin.addVideo');
        Route::post('save/video',[VideoController::class,'saveVideo'])->name('admin.saveVideo');
        Route::get('edit/video/{id}',[VideoController::class,'editVideo'])->name('admin.editVideo');
        Route::get('delete/video/{id}',[VideoController::class,'deleteVideo'])->name('admin.deleteVideo');
        
        // careers 
        Route::get('careers',[CareerController::class,'index'])->name('admin.careers');
        Route::get('add/career/form',[CareerController::class,'addCareerForm'])->name('admin.addCareer');
        Route::post('save/career',[CareerController::class,'saveCareer'])->name('admin.saveCareer');
        Route::get('edit/career/{id}',[CareerController::class,'editCareer'])->name('admin.editCareer');
        Route::get('delete/career/{id}',[CareerController::class,'deleteCareer'])->name('admin.deleteCareer');
        
        // Reviews 
        Route::get('reviews',[ReviewsController::class,'index'])->name('admin.reviews');
        Route::get('add/reviews/form',[ReviewsController::class,'addReviewsForm'])->name('admin.addReviews');
        Route::post('save/reviews',[ReviewsController::class,'saveReviews'])->name('admin.saveReviews');
        Route::get('edit/reviews/{id}',[ReviewsController::class,'editReviews'])->name('admin.editReviews');
        Route::get('delete/reviews/{id}',[ReviewsController::class,'deleteReviews'])->name('admin.deleteReviews');
        
        // faqs 
        Route::get('faqs',[FaqsController::class,'index'])->name('admin.faqs');
        Route::get('add/faqs/form',[FaqsController::class,'addFaqsForm'])->name('admin.addFaqs');
        Route::post('save/faqs',[FaqsController::class,'saveFaqs'])->name('admin.saveFaqs');
        Route::get('edit/faqs/{id}',[FaqsController::class,'editFaqs'])->name('admin.editFaqs');
        Route::get('delete/faqs/{id}',[FaqsController::class,'deleteFaqs'])->name('admin.deleteFaqs');

        // Learner support
        Route::get('learner-support',[HomepageController::class,'learnerSupportForm'])->name('admin.learner_support');
        Route::post('learner-support/update',[HomepageController::class,'learnerSupportUpdate'])->name('admin.learner_support_update');
        
        // testmonials 
        Route::get('testmonials',[TestmonialsController::class,'index'])->name('admin.testmonials');
        Route::get('add/testmonials/form',[TestmonialsController::class,'addTestimonialsForm'])->name('admin.addTestmonials');
        Route::post('save/testmonials',[TestmonialsController::class,'saveTestimonials'])->name('admin.saveTestimonials');
        Route::get('edit/testmonials/{slug}',[TestmonialsController::class,'editTestimonials'])->name('admin.editTestimonials');
        Route::post('updateTestmonials/{id}',[TestmonialsController::class,'updateTestmonials'])->name('admin.updateTestmonials');
        Route::get('deleteTestimonials/{id}',[TestmonialsController::class,'deleteTestimonials'])->name('admin.deleteTestimonials');
// end main banners
        Route::get('banner_edit/{id}',[HomepageController::class,'banner_edit'])->name('admin.banner_edit');
        Route::post('upload_banners',[HomepageController::class,'upload_banners'])->name('admin.upload_banners');
        Route::post('edit_banners/{id}',[HomepageController::class,'edit_banners'])->name('admin.edit_banners');


        // Route::get('sub_category',[categoryController::class,'sub_category'])->name('admin.sub_category');
        // Route::get('addSubCategory',[categoryController::class,'addSubCategory'])->name('admin.addSubCategory');
        // Route::post('saveSubCategory',[categoryController::class,'saveSubCategory'])->name('admin.saveSubCategory');
        // Route::get('editSubCategory/{id}',[categoryController::class,'editSubCategory'])->name('admin.editSubCategory');
        // Route::post('updateSubCategory/{id}',[categoryController::class,'updateSubCategory'])->name('admin.updateSubCategory');

        // Route::get('packersMoversList',[PackerMoverController::class,'packersMoversList'])->name('admin.packersMoversList');
        // Route::get('viewOrderDetails',[PackerMoverController::class,'viewOrderDetails'])->name('admin.viewOrderDetails');



       
});

// Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
//     Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
//     Route::get('profile',[UserController::class,'profile'])->name('user.profile');
//     Route::get('settings',[UserController::class,'settings'])->name('user.settings');
// });

// frontend route
// Blogs  
Route::get('all/blogs',[HomeController::class,'blogsFrntendList']);
Route::get('blog/details/{slug}',[HomeController::class,'blogDetails']);
//services
Route::get('all/services',[HomeController::class,'servicesFrntendList']);
Route::get('service/details/{slug}',[HomeController::class,'serviceDetails']);
// Newsletters
Route::post('news/letter/saved',[HomeController::class,'savedNewsLetter']);
// contact
Route::post('contact/store',[HomeController::class,'saveContactDetails']);
// courses
Route::get('course/list/{id}',[HomeController::class,'courseList']);
