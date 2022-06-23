<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PathLossController;

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

Route::get('/', [BasicController::class, 'welcome_page']);


Auth::routes();
Route::get('test', [PathLossController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', function(){
    return view ('about',[
        "nama" => "Widya Yulia Astuti",
        "nrp" => "1203191035",
        "prodi" => " D3 Teknik Telekomunikasi B",
        "email" => "widyayulia23878@gmail.com",
        "image" => "",
    ]);
    });

Route::get('/lingkungan', function(){
    return view ('pathloss.lingkungan');
    });
    Route::get('/datarural', function(){
        return view ('pathloss.datarural');
        });
        Route::get('/dataurban', function(){
            return view ('pathloss.dataurban');
            });
            Route::get('/dataokumura', function(){
                return view ('pathloss.dataokumura');
                }); 

    Route::get('/ruralpathloss', function(){
        return view ('pathloss.rural.ruralpathloss');
        });
        Route::get('/suburbanpathloss', function(){
            return view ('pathloss.suburban.suburbanpathloss');
            });
            Route::get('/urbanpathloss', function(){
                return view ('pathloss.urban.urbanpathloss');
                });

Route::get('/model-pengukuran', function(){
    return view ('pathloss.model-pengukuran');
    });

    Route::get('/hitung/{tipe}', [PathLossController::class, 'HalamanHitung']);
Route::get('/data', [HomeController::class, 'page_count']);

Route::get('/pilihling', function(){
    return view ('kuat_sinyal.pilihlingkungan');
    });

Route::get('/pilihtampilan', function(){
    return view ('pilihtampilan');
    });
Route::get('/rural', function(){
    return view ('kuat_sinyal.rural.rural');
        });
        Route::get('/displayrural1', function(){
            return view ('kuat_sinyal.rural.displayrural1');
            });
            

Route::get('/suburban', function(){
    return view ('kuat_sinyal.suburban.suburban');
    });
    Route::get('/suburban1', function(){
        return view ('kuat_sinyal.suburban.suburban1');
        });
        Route::get('/suburban2', function(){
            return view ('kuat_sinyal.suburban.suburban2');
            });

Route::get('/urban', function(){
    return view ('kuat_sinyal.urban.urban');
    });
    Route::get('/urban1', function(){
        return view ('kuat_sinyal.urban.urban1');
        });
        Route::get('/urban2', function(){
            return view ('kuat_sinyal.urban.urban2');
            });
            Route::get('/urban3', function(){
                return view ('kuat_sinyal.urban.urban3');
                });

                // Route::get('/input', function(){
                    // return view ('pathloss.suburban.input');
                    // });
                    // Route::get('/suburban-input', function(){
                        // return view ('pathloss.suburban.suburban-input');
                        // });
                        // Route::get('/suburbanpathloss', function(){
                            // return view ('pathloss.suburban.suburbanpathloss');
                            // });
            //  Route::get('/urban-bts', function(){
                // return view ('pathloss.urban.urban-bts');
                    // });
                    // Route::get('/urban-input', function(){
                        // return view ('pathloss.urban.urban-input');
                            // }); 
                            // Route::get('/urbanpathloss', function(){
                                // return view ('pathloss.urban.urbanpathloss');
                                    // });


Route :: prefix('/pathloss')->name('pathloss.')->group(function(){
    Route::prefix('/rural')->name('rural.')->group(function(){
        Route::get('/input', [PathLossController::class, 'HalamanInputRural'])->name('input');
        Route::post('/input', [PathLossController::class, 'HitungRural'])->name('hitung');
        Route::get('/map', [PathLossController::class, 'TampilkanMap'])->name('map');
    });
    Route::prefix('/suburban')->name('suburban.')->group(function(){
        Route::get('/bts', [PathLossController::class, 'PilihLokasiSuburban'])->name('bts');
        Route::get('/input/{idBTS}', [PathLossController::class, 'HalamanInputSuburban'])->name('input');
        Route::post('/input', [PathLossController::class, 'HitungSuburban'])->name('hitung');
        Route::get('/map', [PathLossController::class, 'TampilkanMap'])->name('map');
    });
    Route::prefix('/urban')->name('urban.')->group(function(){
        Route::get('/bts', [PathLossController::class, 'PilihLokasiUrban'])->name('bts');
        Route::get('/input/{idBTS}', [PathLossController::class, 'HalamanInputUrban'])->name('input');
        Route::post('/input', [PathLossController::class, 'HitungUrban'])->name('hitung');
        Route::get('/map', [PathLossController::class, 'TampilkanMap'])->name('map');
    });
   
});

    Route::get('/coba', function(){
        return view ('admin.coba');
        });  

