<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Livewire\BusinessPage;
use App\Livewire\ProfilePage;
use App\Livewire\LandingPage;
use App\Livewire\Search;
Use App\Livewire\ReviewPage;
use App\Livewire\Business\Show as BusinessShow;
use App\Livewire\Business\Pages\Products as BusinessProducts;
use App\Livewire\Business\Pages\Team as BusinessTeam;
use App\Livewire\Business\Pages\Profile as BusinessProfile;
use App\Livewire\Business\Pages\Integrations as BusinessIntegrations;

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

Route::get('/', LandingPage::class)->name('home');

Route::get('/b/{id}', BusinessPage::class)->name('business');

Route::get('/p/{id}', ProfilePage::class)->name('profile');

Route::get('/search', Search::class)->name('search');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return Redirect::to('/user/profile');
    })->name('dashboard');

    Route::get('/user/edit', function () {
        return view('profile.edit');
    })->name('user.edit');

    Route::get('/billing', function () {
        return view('billing');
    })->name('billing');

    Route::get('/review/create/{id}', ReviewPage::class)->name('review.create');

    Route::middleware(['auth', 'verify.business.membership'])->group(function () {

        Route::get('a/{id}/', BusinessShow::class)->name('business.show');

        Route::get('a/{id}/sales', BusinessShow::class)->name('business.page.sales');
        Route::get('a/{id}/marketing', BusinessShow::class)->name('business.page.marketing');
        Route::get('a/{id}/crm', BusinessShow::class)->name('business.page.crm');

        Route::get('a/{id}/products', BusinessProducts::class)->name('business.page.products');

        Route::get('a/{id}/team', BusinessTeam::class)->name('business.page.team');

        Route::get('a/{id}/profile', BusinessProfile::class)->name('business.page.profile');

        Route::get('a/{id}/messages', BusinessShow::class)->name('business.page.messages');

        Route::get('a/{id}/integrations', BusinessIntegrations::class)->name('business.page.integrations');

    });

    Route::get('a/new', function () {
        // Nothing Yet
    })->name('business.create');

});
