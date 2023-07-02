<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('indexUS');
});

Route::get('/indexES', function () {
    return view('indexES');
})->name('indexES');


Route::get('/indexUS', function () {
    return view('indexUS');
})->name('indexUS');


//emviar correo a contactanos
route::post('enviar-contactanos', function() {
    // return request()->all();($name, $email, $phone, $subject, $message)
    // Mail::to(request()->email)->send(new EnviarCorreo(request()->name,request()->email,request()->phone,request()->subject,request()->message));
    Mail::to('mauricioperezgarcia777@gmail.com')->send(new EnviarCorreo(request()->name,request()->email,request()->phone,request()->subject,request()->message,request()->PAGEES));
    // Mail::to('sotelotelleztransp@gmail.com')->send(new EnviarCorreo(request()->name,request()->email,request()->phone,request()->subject,request()->message,request()->PAGEES));

    if (request()->PAGEES == "1") return redirect()->route('indexUS')->with('success', 'Email Sent Successfully');
    else return redirect()->route('indexES')->with('success', 'Correo Enviado Correctamente');

})->name('enviar-contactanos');

