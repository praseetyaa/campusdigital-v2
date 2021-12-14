<?php

use Illuminate\Support\Facades\Route;

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

// Letakkan fungsi ini pada route paling atas
\Ajifatur\FaturCMS\FaturCMS::routes();

// Home
Route::get('/', 'HomeController@index')->name('site.home');

// Route::get('/test', function() {
// 	$folder_id = "1svY2zBTqyGLqYk5tOo4LoKuLvPCi0LpC";
// 	\Storage::extend('google', function($app, $config) use($folder_id) {
// 		$client = new \Google_Client();
// 		$client->setClientId($config['clientId']);
// 		$client->setClientSecret($config['clientSecret']);
// 		$client->refreshToken($config['refreshToken']);
// 		$service = new \Google_Service_Drive($client);
// 		$adapter = new \Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter($service, $folder_id);
// 		return new \League\Flysystem\Filesystem($adapter);
// 	});
	
// 	$files = \Storage::disk('google')->files('\\');
// 	foreach($files as $file){
// 		echo '<img src="https://drive.google.com/uc?id='.$file.'">';
// 		echo '<br/>';
// 	}
// 	return;
// });

// Program
Route::get('/program/kategori/{category}', 'ProgramController@index')->name('site.program.index');
Route::get('/program/{permalink}', 'ProgramController@detail')->name('site.program.detail');
Route::post('/program/{permalink}/register', 'ProgramController@register')->name('site.program.register');

// Artikel
Route::get('/artikel', 'ArtikelController@index')->name('site.artikel.index');
Route::get('/artikel/{permalink}', 'ArtikelController@detail')->name('site.artikel.detail');
Route::get('/artikel/kategori/{permalink}', 'ArtikelController@byCategory')->name('site.artikel.by-category');
Route::get('/artikel/author/{username}', 'ArtikelController@byAuthor')->name('site.artikel.by-author');
Route::get('/artikel/contributor/{username}', 'ArtikelController@byContributor')->name('site.artikel.by-contributor');

// Cabang
Route::get('/cabang', 'CabangController@index')->name('site.cabang.index');

// Halaman
Route::get('/{permalink}', 'HalamanController@detail')->name('site.halaman.detail');
