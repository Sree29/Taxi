<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('', [UserController::class, 'index'])->name('user.index');

Route::get('/cars', [UserController::class, 'car'])->name('user.cars');
Route::get('/pricings', [UserController::class, 'pricing'])->name('user.pricing'); 


//contact
Route::get('/contacts', [UserController::class, 'contact'])->name('user.contact'); 
Route::post('/contact/store', [UserController::class, 'storeContact'])->name('user.contact.store');
Route::post('/admin/contact/delete', [AdminController::class, 'deleteContact'])->name('admin.deleteContact');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index'); 


//booking
Route::get('/booking', [AdminController::class, 'booking'])->name('admin.booking'); 
Route::post('/delete-booking', [AdminController::class, 'deleteBooking'])->name('admin.deleteBooking');
Route::post('/user/booking/store', [UserController::class, 'storeBooking'])->name('user.booking.store');


//car

Route::get('/car', [AdminController::class, 'car'])->name('admin.car');
Route::post('/car/store', [AdminController::class, 'carStore'])->name('admin.carStore');
Route::put('/car/update', [AdminController::class, 'Carupdate'])->name('admin.carUpdate');
Route::delete('/cardestroy/{id}', [AdminController::class, 'cardestroy'])->name('cardestroy');


//contact
Route::get('/contact', [AdminController::class, 'contact'])->name('admin.contact'); 



//driver
Route::get('/driver', [AdminController::class, 'driver'])->name('admin.driver'); 
Route::post('/user/driver/store', [UserController::class, 'storeDriver'])->name('user.driver.store');
Route::post('/admin/delete-driver', [AdminController::class, 'deleteDriver'])->name('admin.deleteDriver');



//pricing
Route::get('/pricing', [AdminController::class, 'pricing'])->name('admin.pricing'); 
Route::post('/admin/pricing/store', [AdminController::class, 'pricingStore'])->name('pricing.store');
Route::put('/pricing/{id}', [AdminController::class, 'pricingUpdate'])->name('pricing.update');
Route::delete('pricing/{id}', [AdminController::class, 'pricingDestroy'])->name('pricing.destroy');



//service
Route::get('/adminservice', [AdminController::class, 'service'])->name('admin.service'); 
Route::post('/adminservice', [AdminController::class, 'store'])->name('services.store');
Route::put('/services/{id}', [AdminController::class, 'update'])->name('service.update');
Route::delete('/services/{id}', [AdminController::class, 'destroy'])->name('service.destroy');

// Routes for testimonials
Route::get('/testimonial', [AdminController::class, 'testimonial'])->name('admin.testimonial');
Route::post('/admin/testimonial/store', [AdminController::class, 'testimonialstore'])->name('admin.testimonial.store');
Route::put('/admin/testimonial/{id}', [AdminController::class, 'terstimonialupdate'])->name('admin.testimonial.update');
Route::delete('/testimonial/{id}', [AdminController::class, 'terstimonialdelete'])->name('admin.testimonial.delete');

