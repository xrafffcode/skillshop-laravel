<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardUserLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $active;
    public function __construct($title = null, $active = null)
    {
        $this->title = $title ?? config('app.name');
        $this->active = $active ?? 'dashboard';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.dashboard-user');
    }
}
