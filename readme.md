
composer require livewire/livewire

php artisan make:livewire <name of file>

//for layout
php artisan livewire:layout


//on root folder
use App\Livewire\Counter;
 
Route::get('/counter', Counter::class);
