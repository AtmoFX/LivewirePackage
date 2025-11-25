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
        if ($this->app->runningInConsole()) {
        //     $this->commands(
        //         commands: [
        //             DataTransferObjectMakeCommand::class,
        //         ],
        //     );
        }
        else {
            $this->registerComponents();
        }   
    }
    public function registerComponents()
    {
        // Blade components work
        Blade::component($prefix . 'button', Button::class);

        // Livewire components don't

        // If you uncomment the following line, the error becomes 
        //Blade::anonymousComponentPath(__DIR__.'/Views/Components');
        Livewire::addComponent(
            name: 'counter',
            viewPath: __DIR__.'Views/Components/counter.blade.php'
        );
    }
}