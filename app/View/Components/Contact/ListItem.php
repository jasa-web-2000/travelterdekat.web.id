<?php

namespace App\View\Components\Contact;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $icon,
        public string $subSubTitle,
        public string $detail,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact.list-item');
    }
}
