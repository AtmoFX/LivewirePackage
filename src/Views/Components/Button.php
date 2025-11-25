<?php

namespace AtmoFX\Views\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $type       = 'classic';
    public string $lightTheme = 'light';
    public string $darkTheme  = 'dark'; 

    public function __construct(?string $type)
    {
        if (isset($type))
            $this->type = $type;
    }

    public function render(): View|Closure|string
    {
        return <<<'HTML'
        <button class="bg-blue-400 text-white p-2 rounded" 
            x-data
            @click="alert('Button clicked!')"
        >
            {{ $slot }
        </button>}
        HTML;
    }
}
