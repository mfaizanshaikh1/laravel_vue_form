<?php
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
})
->name('application');

Route::get('/send-mail',function(){
$formData = 'faizanshaikh888@gmail.com';
dispatch(new App\Jobs\SendEmail($formData));
dd ('send Mail successfully!');
});
