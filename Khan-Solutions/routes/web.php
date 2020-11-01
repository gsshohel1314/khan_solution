<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
//website routes
Route::get('/', 'WebsiteController@index')->name('');
Route::get('about', 'WebsiteController@about')->name('');
Route::get('services', 'WebsiteController@services')->name('');
Route::get('portfolio', 'WebsiteController@portfolio')->name('');
Route::get('contact', 'WebsiteController@contact')->name('');
Route::get('blog', 'WebsiteController@blog')->name('');
Route::get('post/{slug}', 'WebsiteController@post')->name('');
Route::post('comment/{id}', 'CommentController@store');

Route::post('contact/submit', 'ProcessController@contact')->name('');
//admin panel routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', 'DashboardController@index')->name('');

Route::get('dashboard/user', 'UserController@index')->name('');
Route::get('dashboard/user/add', 'UserController@add')->name('');
Route::get('dashboard/user/edit/{user}', 'UserController@edit')->name('');
Route::get('dashboard/user/view/{user}', 'UserController@view')->name('');
Route::post('dashboard/user/submit', 'UserController@insert')->name('');
Route::post('dashboard/user/update', 'UserController@update')->name('');
Route::post('dashboard/user/softdelete', 'UserController@softdelete')->name('');
Route::post('dashboard/user/restore', 'UserController@restore')->name('');
Route::post('dashboard/user/delete', 'UserController@delete')->name('');

Route::get('dashboard/banner', 'BannerController@index')->name('');
Route::get('dashboard/banner/add', 'BannerController@add')->name('');
Route::get('dashboard/banner/edit/{slug}', 'BannerController@edit')->name('');
Route::get('dashboard/banner/view/{slug}', 'BannerController@view')->name('');
Route::post('dashboard/banner/submit', 'BannerController@insert')->name('');
Route::post('dashboard/banner/update', 'BannerController@update')->name('');
Route::post('dashboard/banner/publish', 'BannerController@publish')->name('');
Route::post('dashboard/banner/unpublish', 'BannerController@unpublish')->name('');
Route::post('dashboard/banner/softdelete', 'BannerController@softdelete')->name('');
Route::post('dashboard/banner/restore', 'BannerController@restore')->name('');
Route::post('dashboard/banner/delete', 'BannerController@delete')->name('');

Route::get('dashboard/manage/basic', 'ManageController@basic')->name('');
Route::post('dashboard/manage/basic/update', 'ManageController@update_basic')->name('');
Route::get('dashboard/manage/social', 'ManageController@social_media')->name('');
Route::post('dashboard/manage/social/update', 'ManageController@update_social_media')->name('');
Route::get('dashboard/manage/contact', 'ManageController@contact')->name('');
Route::post('dashboard/manage/contact/update', 'ManageController@update_contact')->name('');
Route::get('dashboard/manage/copyright', 'ManageController@copyright')->name('');
Route::post('dashboard/manage/copyright/update', 'ManageController@update_copyright')->name('');

Route::get('dashboard/page', 'PageController@index')->name('');

Route::get('dashboard/page/content', 'PageContentController@index')->name('');
Route::get('dashboard/page/content/edit/{slug}', 'PageContentController@edit')->name('');
Route::post('dashboard/page/content/update', 'PageContentController@update')->name('');

Route::get('dashboard/gallery/category', 'GalleryCategoryController@index')->name('');
Route::get('dashboard/gallery/category/add', 'GalleryCategoryController@add')->name('');
Route::get('dashboard/gallery/category/edit/{slug}', 'GalleryCategoryController@edit')->name('');
Route::get('dashboard/gallery/category/view/{slug}', 'GalleryCategoryController@view')->name('');
Route::post('dashboard/gallery/category/submit', 'GalleryCategoryController@insert')->name('');
Route::post('dashboard/gallery/category/update', 'GalleryCategoryController@update')->name('');
Route::post('dashboard/gallery/category/softdelete', 'GalleryCategoryController@softdelete')->name('');
Route::post('dashboard/gallery/category/restore', 'GalleryCategoryController@restore')->name('');
Route::post('dashboard/gallery/category/delete', 'GalleryCategoryController@delete')->name('');

Route::get('dashboard/gallery', 'GalleryController@index')->name('');
Route::get('dashboard/gallery/add', 'GalleryController@add')->name('');
Route::get('dashboard/gallery/edit/{slug}', 'GalleryController@edit')->name('');
Route::get('dashboard/gallery/view/{slug}', 'GalleryController@view')->name('');
Route::post('dashboard/gallery/submit', 'GalleryController@insert')->name('');
Route::post('dashboard/gallery/update', 'GalleryController@update')->name('');
Route::post('dashboard/gallery/softdelete', 'GalleryController@softdelete')->name('');
Route::post('dashboard/gallery/restore', 'GalleryController@restore')->name('');
Route::post('dashboard/gallery/delete', 'GalleryController@delete')->name('');

Route::get('dashboard/blog/post', 'BlogPostController@index')->name('');
Route::get('dashboard/blog/post/add', 'BlogPostController@add')->name('');
Route::get('dashboard/blog/post/edit/{slug}', 'BlogPostController@edit')->name('');
Route::get('dashboard/blog/post/view/{slug}', 'BlogPostController@view')->name('');
Route::post('dashboard/blog/post/submit', 'BlogPostController@insert')->name('');
Route::post('dashboard/blog/post/update', 'BlogPostController@update')->name('');
Route::post('dashboard/blog/post/softdelete', 'BlogPostController@softdelete')->name('');
Route::post('dashboard/blog/post/restore', 'BlogPostController@restore')->name('');
Route::post('dashboard/blog/post/delete', 'BlogPostController@delete')->name('');
Route::put('dashboard/blog/post/status/{id?}', 'BlogPostController@status');

Route::get('dashboard/blog/category', 'BlogCategoryController@index')->name('');
Route::get('dashboard/blog/category/add', 'BlogCategoryController@add')->name('');
Route::get('dashboard/blog/category/edit/{slug}', 'BlogCategoryController@edit')->name('');
Route::get('dashboard/blog/category/view/{slug}', 'BlogCategoryController@view')->name('');
Route::post('dashboard/blog/category/submit', 'BlogCategoryController@insert')->name('');
Route::post('dashboard/blog/category/update', 'BlogCategoryController@update')->name('');
Route::post('dashboard/blog/category/softdelete', 'BlogCategoryController@softdelete')->name('');
Route::post('dashboard/blog/category/restore', 'BlogCategoryController@restore')->name('');
Route::post('dashboard/blog/category/delete', 'BlogCategoryController@delete')->name('');

Route::get('dashboard/blog/tag', 'TagController@index')->name('');
Route::get('dashboard/blog/tag/add', 'TagController@add')->name('');
Route::get('dashboard/blog/tag/edit/{slug}', 'TagController@edit')->name('');
Route::get('dashboard/blog/tag/view/{slug}', 'TagController@view')->name('');
Route::post('dashboard/blog/tag/submit', 'TagController@insert')->name('');
Route::post('dashboard/blog/tag/update', 'TagController@update')->name('');
Route::post('dashboard/blog/tag/softdelete', 'TagController@softdelete')->name('');
Route::post('dashboard/blog/tag/restore', 'TagController@restore')->name('');
Route::post('dashboard/blog/tag/delete', 'TagController@delete')->name('');

Route::get('dashboard/newsletter/subscribe', 'NewsletterSubscribeController@index')->name('');

Route::get('dashboard/team', 'TeamController@index')->name('');
Route::get('dashboard/team/add', 'TeamController@add')->name('');
Route::get('dashboard/team/edit/{slug}', 'TeamController@edit')->name('');
Route::get('dashboard/team/view/{slug}', 'TeamController@view')->name('');
Route::post('dashboard/team/submit', 'TeamController@insert')->name('');
Route::post('dashboard/team/update', 'TeamController@update')->name('');
Route::delete('dashboard/team/delete/{id}', 'TeamController@delete');

Route::get('dashboard/partner', 'PartnerController@index')->name('');
Route::get('dashboard/partner/add', 'PartnerController@add')->name('');
Route::get('dashboard/partner/edit/{slug}', 'PartnerController@edit')->name('');
Route::get('dashboard/partner/view/{slug}', 'PartnerController@view')->name('');
Route::post('dashboard/partner/submit', 'PartnerController@insert')->name('');
Route::post('dashboard/partner/update', 'PartnerController@update')->name('');
Route::post('dashboard/partner/softdelete', 'PartnerController@softdelete')->name('');
Route::post('dashboard/partner/restore', 'PartnerController@restore')->name('');
Route::post('dashboard/partner/delete', 'PartnerController@delete')->name('');

Route::get('dashboard/testimonial', 'TestimonialController@index')->name('');
Route::get('dashboard/testimonial/add', 'TestimonialController@add')->name('');
Route::get('dashboard/testimonial/edit/{slug}', 'TestimonialController@edit')->name('');
Route::get('dashboard/testimonial/view/{slug}', 'TestimonialController@view')->name('');
Route::post('dashboard/testimonial/submit', 'TestimonialController@insert')->name('');
Route::post('dashboard/testimonial/update', 'TestimonialController@update')->name('');
Route::delete('dashboard/testimonial/delete/{id}', 'TestimonialController@delete');

Route::get('dashboard/contactus', 'ContactUsController@index')->name('');
Route::get('dashboard/contactus/view/{slug}', 'ContactUsController@view')->name('');
Route::post('dashboard/contactus/softdelete', 'ContactUsController@softdelete')->name('');
Route::post('dashboard/contactus/restore', 'ContactUsController@restore')->name('');
Route::post('dashboard/contactus/delete', 'ContactUsController@delete')->name('');

Route::get('dashboard/recycle', 'RecycleController@index')->name('');
Route::get('dashboard/recycle/user', 'RecycleController@user')->name('');
Route::get('dashboard/recycle/banner', 'RecycleController@banner')->name('');
Route::get('dashboard/recycle/contactus', 'RecycleController@contactus')->name('');
Route::get('dashboard/recycle/partner', 'RecycleController@partner')->name('');
Route::get('dashboard/recycle/gallery', 'RecycleController@gallery')->name('');
Route::get('dashboard/recycle/gallery/category', 'RecycleController@gallery_category')->name('');
Route::get('dashboard/recycle/blog/post', 'RecycleController@post')->name('');
Route::get('dashboard/recycle/blog/category', 'RecycleController@blog_category')->name('');
Route::get('dashboard/recycle/blog/tag', 'RecycleController@tag')->name('');

Route::get('dashboard/profile', 'ProfileController@index')->name('');
Route::get('dashboard/permission', 'DashboardController@permission')->name('');

Route::resource('dashboard/service', 'ServiceController');
Route::put('dashboard/service/status/{id}', 'ServiceController@status');
Route::get('dashboard/recycle/service', 'ServiceRecycleController@index');
Route::get('dashboard/recycle/service/restore/{id}', 'ServiceRecycleController@restore');
Route::delete('dashboard/recycle/service/delete/{id}', 'ServiceRecycleController@delete');

Route::resource('dashboard/project/category', 'ProjectCategoryController');
Route::put('dashboard/project/category/status/{id}', 'ProjectCategoryController@status');
Route::get('dashboard/recycle/project/category', 'ProjectCategoryRecycleController@index');
Route::get('dashboard/recycle/project/category/restore/{id}', 'ProjectCategoryRecycleController@restore');
Route::delete('dashboard/recycle/project/category/delete/{id}', 'ProjectCategoryRecycleController@delete');


Route::resource('dashboard/project', 'ProjectController');
Route::put('dashboard/project/status/{id}', 'ProjectController@status');
Route::get('dashboard/recycle/project', 'ProjectRecycleController@index');
Route::get('dashboard/recycle/project/restore/{id}', 'ProjectRecycleController@restore');
Route::delete('dashboard/recycle/project/delete/{id}', 'ProjectRecycleController@delete');

