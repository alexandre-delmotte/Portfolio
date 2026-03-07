<?php

namespace App\View\Components\Utils;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $source,
        public string $description = '',
        public string $link = '#',
        public string $github = '#',
        public string $blur = ''
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.utils.project-card');
    }
}
