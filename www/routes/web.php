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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

/*
Route::fallback(function() {
$generated = \Blade::compileString(File::get('app.html'));

ob_start() and extract([], EXTR_SKIP);

// We'll include the view contents for parsing within a catcher
// so we can avoid any WSOD errors. If an exception occurs we
// will throw it out to the exception handler.
try {
eval('?>'.$generated);
}

// If we caught an exception, we'll silently flush the output
// buffer so that no partially rendered views get thrown out
// to the client and confuse the user with junk.
catch (\Exception $e) {
ob_get_clean(); throw $e;
}

return ob_get_clean();
});
 */

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/images/posts/cover_image/{postId}', 'ImageController@postCoverImage');
