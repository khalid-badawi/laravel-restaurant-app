<?php

namespace App\View\Components;

use Closure;
use App\Models\Review;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Ratings extends Component
{
    public $reviews;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->reviews = Review::with('user')->take(3)->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ratings');
    }
}
