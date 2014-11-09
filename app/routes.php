<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//:: Application Routes ::

// # Tournaments Static Page
// Route::get('tournaments', 'SiteController@getTournaments');

# WSF Static Page
Route::get('wsf', 'SiteController@getWsf');
# Ibercup Static Page
Route::get('ibercup', 'SiteController@getIbercup');
# Photo & Video Static Page
//Route::get('photo-video', 'SiteController@getPhotoVideo');

# Tournaments Route
Route::get('tournaments', ['as' => 'posts.listTournaments', 'uses' => 'PostController@listTournaments']);
Route::get('tournaments/{slug}', ['as' => 'posts.showTournaments', 'uses' => 'PostController@showTournaments']);

# Photo-Video Route
Route::get('photo-video', ['as' => 'posts.listPhotoVideo', 'uses' => 'PostController@listPhotoVideo']);
Route::get('photo-video/{slug}', ['as' => 'posts.showPhotoVideo', 'uses' => 'PostController@showPhotoVideo']);

# News Route
Route::get('news', ['as' => 'posts.listNews', 'uses' => 'PostController@listNews']);
Route::get('news/{slug}', ['as' => 'posts.showNews', 'uses' => 'PostController@showNews']);

# About Us Static Page
Route::get('about', 'SiteController@getAbout');
# Contact Us Static Page
Route::get('contact', 'SiteController@getContact');

Route::get('search/{q?}', ['as' => 'search.showSearch', 'uses' => 'SiteController@showSearch']);


# Static pages method ( lets use for About and Coontact... for now)
Route::get('/{page}', ['uses' => 'SiteController@showStaticPage']);


/* Home routes */
Route::get('/', 'SiteController@getIndex');





//Route::get('search{q}', function() {
    // $q = Input::get( 'q' );
    // if ( !is_null( $q ) ) {
    //     $searchResults = Post::where( function ( $query ) use($q)
    //     {
    //         $query->where( 'post_name', 'like', '%'.$q.'%' )
    //         ->orWhere( 'post_content', 'like', '%'.$q.'%' );
    //     })->where( function( $query )
    //     {
    //         $query->where( 'post_type', '=', 'news' )
    //                 ->where( 'post_status', '=', 'publish' );
    //     })->get();


    // } else {
    //     dd('show search only');
    // }

    // $siteController = new SiteController();
    // $sidebarData = array(
    //     'latestPosts'   => $siteController->getLatestPosts(),
    //     'popularPosts'  => $siteController->getPopularPosts()
    //  );
    // return View::make( 'public/home' )      ->nest('main_view', 'public.search', compact( 'searchResults' ) )
    //                                         ->nest('side_view', 'public.side', compact( 'sidebarData' ) );

//});


/* User routes */
Route::get('/news/{slug}', ['as' => 'posts.showNews', 'uses' => 'PostController@showNews']);
//Route::get('/photo-video/{slug}', ['as' => 'postPhotoVideo.show', 'uses' => 'PostController@showPost']);


