<?phP

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prak14','prak14Controller@show');

