<?php
 
namespace AtmoFX;
 
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

use AtmoFX\Views\Components\Button;
 
final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerComponents();
    }
    public function registerComponents()
    {
        // Blade components work
        Blade::component('button', Button::class);

        // Livewire components don't

        // If you uncomment the following line, the error changes 
        //Blade::anonymousComponentPath(__DIR__.'/Views/Components');
        Livewire::addComponent(
            name: 'counter',
            viewPath: __DIR__.'Views/Components/counter.blade.php'
        );
    }
}