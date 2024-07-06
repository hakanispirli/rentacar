<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Backend\AdminDashboardController;
use App\Http\Controllers\Backend\AracController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\KampanyaController;
use App\Http\Controllers\Backend\PaketController;
use App\Http\Controllers\ReservationController;

Route::get('/', [IndexController::class, 'Index'])->name('index');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'AdminDashboard'])->name('admin.dashboard');

    // Araç İşlemleri
    Route::get('/admin/araclar', [AracController::class, 'Araclar'])->name('admin.araclar');
    Route::get('/admin/araclar/ekle', [AracController::class, 'AraclarEkle'])->name('admin.araclar.ekle');
    Route::post('/admin/araclar/ekle/action', [AracController::class, 'AraclarEkleAction'])->name('admin.araclar.ekle.action');
    Route::get('/admin/araclar/duzenle/{id}', [AracController::class, 'AraclarDuzenle'])->name('admin.araclar.duzenle');
    Route::post('/admin/araclar/duzenle/action', [AracController::class, 'AraclarDuzenleAction'])->name('admin.araclar.duzenle.action');
    Route::get('/admin/araclar/sil/{id}', [AracController::class, 'AraclarSil'])->name('admin.araclar.sil');
    Route::post('/admin/araclar/durum', [AracController::class, 'AracDurumu'])->name('admin.araclar.durum');

    // FAQ İşlemler
    Route::get('/admin/faq', [FaqController::class, 'AdminFaq'])->name('admin.faq');
    Route::get('/admin/faq/ekle', [FaqController::class, 'AdminFaqEkle'])->name('admin.faq.ekle');
    Route::post('/admin/faq/ekle/action', [FaqController::class, 'AdminFaqEkleAction'])->name('admin.faq.ekle.action');
    Route::get('/admin/faq/duzenle/{id}', [FaqController::class, 'AdminFaqDuzenle'])->name('admin.faq.duzenle');
    Route::post('/admin/faq/duzenle/action', [FaqController::class, 'AdminFaqDuzenleAction'])->name('admin.faq.duzenle.action');
    Route::get('/admin/faq/sil/{id}', [FaqController::class, 'AdminFaqSil'])->name('admin.faq.sil');

    // Paket İşlemler
    Route::get('/admin/paketler', [PaketController::class, 'AdminPaketler'])->name('admin.paketler');
    Route::post('/admin/paketler/action/', [PaketController::class, 'AdminPaketlerAction'])->name('admin.paketler.action');

    // Blog İşlemler
    Route::get('/admin/blog', [BlogController::class, 'AdminBlog'])->name('admin.blog');
    Route::get('/admin/blog/ekle', [BlogController::class, 'AdminBlogEkle'])->name('admin.blog.ekle');
    Route::post('/admin/blog/ekle/action', [BlogController::class, 'AdminBlogEkleAction'])->name('admin.blog.ekle.action');
    Route::get('/admin/blog/duzenle/{id}', [BlogController::class, 'AdminBlogDuzenle'])->name('admin.blog.duzenle');
    Route::post('/admin/blog/duzenle/action', [BlogController::class, 'AdminBlogDuzenleAction'])->name('admin.blog.duzenle.action');
    Route::get('/admin/blog/sil/{id}', [BlogController::class, 'AdminBlogSil'])->name('admin.blog.sil');

    // Kampanyalar
    Route::get('/admin/kampanyalar', [KampanyaController::class, 'AdminKampanyalar'])->name('admin.kampanyalar');
    Route::get('/admin/kampanyalar/ekle', [KampanyaController::class, 'AdminKampanyalarEkle'])->name('admin.kampanyalar.ekle');
    Route::post('/admin/kampanyalar/ekle/action', [KampanyaController::class, 'AdminKampanyalarEkleAction'])->name('admin.kampanyalar.ekle.action');
    Route::get('/admin/kampanyalar/duzenle/{id}', [KampanyaController::class, 'AdminKampanyalarDuzenle'])->name('admin.kampanyalar.duzenle');
    Route::post('/admin/kampanyalar/duzenle/action', [KampanyaController::class, 'AdminKampanyalarDuzenleAction'])->name('admin.kampanyalar.duzenle.action');
    Route::get('/admin/kampanyalar/sil/{id}', [KampanyaController::class, 'AdminKampanyalarSil'])->name('admin.kampanyalar.sil');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'Logout'])->name('admin.logout');
    Route::get('/profile', [UserController::class, 'Profile'])->name('profile');
    Route::post('/profile/update', [UserController::class, 'ProfileUpdate'])->name('profile.update');
    Route::post('/profile/password', [UserController::class, 'ChangePassword'])->name('profile.password');
});

Route::post('/rezervasyon', [ReservationController::class, 'postRezervasyon'])->name('rezervasyon.post');
Route::get('/araclar/list', [ReservationController::class, 'listele'])->name('araclar.listele');




Route::get('/araclar', [ReservationController::class, 'Araclar'])->name('araclar');
Route::get('/ek-ozellikler', [ReservationController::class, 'EkOzellikler'])->name('ek-ozellikler');
Route::post('/ek-ozellikler/post', [ReservationController::class, 'postEkOzellikler'])->name('postEkOzellikler');
Route::get('/get-session-data', [ReservationController::class, 'getSessionData'])->name('getSessionData');
Route::get('/guvence-paketleri', [ReservationController::class, 'GuvencePaketleri'])->name('guvence-paketleri');
Route::post('/guvence-paketleri/post', [ReservationController::class, 'postGuvencePaketleri'])->name('postGuvencePaketleri');


Route::get('/sss', [IndexController::class, 'SSS'])->name('sss');
Route::get('/iletisim', [IndexController::class, 'Iletisim'])->name('iletisim');
Route::get('/kurumsal', [IndexController::class, 'Kurumsal'])->name('kurumsal');

Route::get('/odeme-bilgileri', [IndexController::class, 'OdemeBilgileri'])->name('odeme-bilgileri');

require __DIR__.'/auth.php';

