<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $menus = [
        [
            'title'=>'Dashboard',
            'url'=>'#'
        ],
        [
            'title'=>'Users',
            'url'=>'#'
        ],
        [
            'title'=>'Brands',
            'url'=>'#'
        ],
        [
            'title'=>'Units',
            'url'=>'#'
        ],
        [
            'title'=>'Werehouses',
            'url'=>'#'
        ],
        [
            'title'=>'Categories',
            'url'=>'#'
        ],
        [
            'title'=>'Benner',
            'url'=>'#'
        ],
        [
            'title'=>'Products',
            'url'=>'#'
        ],
        [
            'title'=>'Stock Reports',
            'url'=>'#'
        ],
        [
            'title'=>'Account Reposrts',
            'url'=>'#'
        ],
        [
            'title'=>'Sitting',
            'url'=>'#'
        ],
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.sidebar');
    }
}
