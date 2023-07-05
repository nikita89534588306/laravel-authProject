<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class registerInput extends Component
{

    public $LANG_CONST;
    public $nameInput;
    public $typeInput;
    /**
     * Create a new component instance.
     */
    public function __construct($nameInput = '', $typeInput = '')
    {
        $this->LANG_CONST = 'messages.registration.registrationForm.';
        $this->nameInput = $nameInput;
        $this->typeInput = $typeInput;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.register-input');
    }
}
