
<?php
use Illuminate\Http\Request;
use Bitfumes\Contact\Http\Controllers\ContactController;

// Route::get('contact',function(){
//     return view('contact::contact');
// })->name('contact');

    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('contact', [ContactController::class, 'send']);

// Route::post('contact', function (Request $request){
//     return $request->all();
// });