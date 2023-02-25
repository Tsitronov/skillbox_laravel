<?php
app()->bind(\App\PriceFormatter::class, function(){
    return new \App\SimplePriceFormatter();
});
Route::get('/test', function(\App\SimplePriceFormatter $formatter, \App\OtherPriceFormatter $formatterOther){
    dd($formatter->format(10000),$formatterOther->format(200000));
});

Route::get('/pushallTest','TestPushallController@show');

/**
Route::get('/pushallTest',function(\App\Pushall $pushall){
    dd($pushall);
});
//dd(app(\App\Dog::class)::where('completed', 1)->get());
*/
Route::view('/','well');
Route::view('/about','about');



Route::get('/about/us', function () {
    $tabs = \App\Boy::get();
    return view('us', compact(
        'tabs'));
});

Route::get('/show', function () {
    $cats = \App\Dog::where('completed', 1)->get();
    return view('show', compact('cats'));
});


Route::get('/task/tags/{tag}', 'TagsController@index');
Route::resource('/task', 'TaskController');
/**
Route::get('/task', 'TaskController@index');
// prima /task/{task} perche create sara anche task
Route::get('/task/create', 'TaskController@create');
Route::get('/task/{task}', 'TaskController@show');
Route::post('/task', 'TaskController@store');

//Route::post('/task/{id}', 'TaskController@update');
Route::get('/task/{task}/edit', 'TaskController@edit');
Route::patch('/task/{task}','TaskController@update');
Route::delete('/task/{task}', 'TaskController@destroy');
//Route::get('/taskdestroy/{id}', 'TaskController@destroy');
*/


Route::post('/task/{task}/steps', 'TaskStepsController@store');
Route::post('/completed-steps/{step}', 'CompletedStepsController@store');
Route::delete('/completed-steps/{step}', 'CompletedStepsController@destroy');


Route::get('/member', 'MemberController@index');
Route::get('/varalo', 'MemberController@varalo');
Route::get('/mongrando', 'MemberController@mongrando');


Route::get('/member/create', 'MemberController@create');

Route::post('/member', 'MemberController@store');

Route::get('/member/{member}', 'MemberController@show');

Route::post('/member/{id}', 'MemberController@update');

Route::get('/memberdestroy/{id}', 'MemberController@destroy');

/**
 * GET/task/create
 * POST/task
 * GET/task/{id}
 * GET/task/{id}/edit
 * PATCH/task/{id}
 * DELETE/task/{id}
 * */
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('home');
