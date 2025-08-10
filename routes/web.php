<?php

//Frontend
use App\Http\Controllers\backend\AdminContactController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FAQsController;
use App\Http\Controllers\frontend\FoodController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\TestimonialController;
use App\Http\Controllers\frontend\NewsDetailsController;
use App\Http\Controllers\frontend\TeamController;


// Admin
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminBlogsController;
use App\Http\Controllers\backend\AdminShopController;
use App\Http\Controllers\backend\AdminTeamController;
use App\Http\Controllers\backend\AdminTestimonialController;
use App\Http\Controllers\backend\AdminMenuController;

//Admin_MODELS
use App\Models\backend\AdminBlogsModel;
use App\Models\backend\AdminContactModal;
use App\Models\backend\AdminMenuModel;
use App\Models\backend\AdminProfileModel;
use App\Models\backend\AdminShopModel;
use App\Models\backend\AdminTeamModel;
use App\Models\backend\AdminTestimonialModel;
use Illuminate\Support\Facades\Route;


//Frontend
Route::get('/about', [AboutController::class, 'index']);
Route::get('/news', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submitMessage']);
Route::get('/faq', [FAQsController::class, 'index']);
Route::get('/food-menu', [FoodController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/testimonial', [TestimonialController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/news-details', [NewsDetailsController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);


// Admin
Route::get('/admin/profile', [AdminProfileController::class, 'index']);

//Login
Route::get('/admin', function(){
    if(session()->has('email')){
        $blogs = AdminBlogsModel::all();
        $menus = AdminMenuModel::all();
        $contact = AdminContactModal::all();
        $shops = AdminShopModel::all();
        $teams = AdminTeamModel::all();
        $testimonials = AdminTestimonialModel::all();
        return view('backend.index', compact('blogs', 'menus', 'contact', 'shops', 'teams', 'testimonials'));
    }
    else {
        return redirect('/admin/login');
    }
});
Route::get('/admin/login', function(){
    if(session()->has('email')){
        return redirect('/admin');
    }
    else {
        return view('backend.login');
    }
});
Route::get('/admin/contact', function(){
    if(session()->has('email')){
        $contacts = AdminContactModal::all();
        return view('backend.pages-contact', compact('contacts'));
    }
    else {
        return redirect('/admin/login');
    }
});
Route::get('/admin/logout', function(){
    if(session()->has('email')){
        session()->pull('email');
        session()->pull('username');
        session()->pull('id');
        session()->flush();
    }
    return redirect('/admin/login');
});

Route::get('/admin/contact/{id}', [AdminContactController::class, 'destroy']);


Route::get('/admin/profile', function(){
    if(session()->has('email')){
        $admin = AdminProfileModel::where('id', 1)->first();
        return view('backend.users-profile', compact('admin'));
    }
    else {
        return redirect('/admin/login');
    }
});
Route::get('/admin/faqs', function(){
    if(session()->has('email')){
        return view('backend.pages-faq');
    }
    else {
        return redirect('/admin/login');
    }
});
Route::post('/admin/login', [AdminLoginController::class, 'onlogin']);


Route::get('/admin/blogs', [AdminBlogsController::class, 'index']);
Route::get('/admin/enable-blogs/{id}', [AdminBlogsController::class, 'enableblogs']);
Route::get('/admin/disable-blogs/{id}', [AdminBlogsController::class, 'disableblogs']);
Route::get('/admin/delete-blogs/{id}', [AdminBlogsController::class, 'deleteblogs']);
Route::get('/admin/edit-blogs/{id}', [AdminBlogsController::class, 'editblogs']);       ///EDIT
Route::post('/admin/edit-blogs/{id}', [AdminBlogsController::class, 'editsingleblogs']); ///Update_single_blog
Route::get('/admin/add-blogs', [AdminBlogsController::class, 'addblogs']); ///ADD_blog
Route::post('/admin/add-blogs', [AdminBlogsController::class, 'addsingleblogs']); ///POST_single_blog

Route::get('/admin/shop', [AdminShopController::class, 'index']);
Route::get('/admin/enable-shop/{id}', [AdminShopController::class, 'enableshop']);
Route::get('/admin/disable-shop/{id}', [AdminShopController::class, 'disableshop']);
Route::get('/admin/delete-shop/{id}', [AdminShopController::class, 'deleteshop']);
Route::get('/admin/edit-shop/{id}', [AdminShopController::class, 'editshop']);       /////EDIT
Route::post('/admin/edit-shop/{id}', [AdminShopController::class, 'editsingleshop']); /////Update_single_shop
Route::get('/admin/add-shop', [AdminShopController::class, 'addshop']); ///ADD_shop
Route::post('/admin/add-shop', [AdminShopController::class, 'addsingleshop']); ///POST_single_shop

Route::get('/admin/team', [AdminTeamController::class, 'index']);
Route::get('/admin/enable-team/{id}', [AdminTeamController::class, 'enableteam']);
Route::get('/admin/disable-team/{id}', [AdminTeamController::class, 'disableteam']);
Route::get('/admin/delete-team/{id}', [AdminTeamController::class, 'deleteteam']);
Route::get('/admin/edit-team/{id}', [AdminTeamController::class, 'editteam']);       /////EDIT
Route::post('/admin/edit-team/{id}', [AdminTeamController::class, 'editsingleteam']); /////Update_single_team
Route::get('/admin/add-team', [AdminTeamController::class, 'addteam']); ///ADD_team
Route::post('/admin/add-team', [AdminTeamController::class, 'addsingleteam']); ///POST_single_team

Route::get('/admin/testimonial', [AdminTestimonialController::class, 'index']);
Route::get('/admin/enable-testimonial/{id}', [AdminTestimonialController::class, 'enabletestimonial']);
Route::get('/admin/disable-testimonial/{id}', [AdminTestimonialController::class, 'disabletestimonial']);
Route::get('/admin/delete-testimonial/{id}', [AdminTestimonialController::class, 'deletetestimonial']);
Route::get('/admin/edit-testimonial/{id}', [AdminTestimonialController::class, 'edittestimonial']);       /////EDIT
Route::post('/admin/edit-testimonial/{id}', [AdminTestimonialController::class, 'editsingletestimonial']); /////Update_single_testimonial
Route::get('/admin/add-testimonial', [AdminTestimonialController::class, 'addtestimonial']); ///ADD_testimonial
Route::post('/admin/add-testimonial', [AdminTestimonialController::class, 'addsingletestimonial']); ///POST_single_testimonial

Route::get('/admin/menu', [AdminMenuController::class, 'index']);
Route::get('/admin/enable-menu/{id}', [AdminMenuController::class, 'enablemenu']);
Route::get('/admin/disable-menu/{id}', [AdminMenuController::class, 'disablemenu']);
Route::get('/admin/delete-menu/{id}', [AdminMenuController::class, 'deletemenu']);
Route::get('/admin/edit-menu/{id}', [AdminMenuController::class, 'editmenu']);       /////EDIT
Route::post('/admin/edit-menu/{id}', [AdminMenuController::class, 'editsinglemenu']); /////Update_single_menu
Route::get('/admin/add-menu', [AdminMenuController::class, 'addmenu']); ///ADD_menu
Route::post('/admin/add-menu', [AdminMenuController::class, 'addsinglemenu']); ///POST_single_menu


Route::post('/admin/update/{id}', [AdminProfileController::class, 'updateAdminProfile']);
Route::post('/admin/change-credentials/{id}', [AdminLoginController::class, 'changeCredentials'])->name('admin.change-credentials');

