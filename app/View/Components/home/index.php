<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class index extends Component
{
    /**
     * current user data.
     *
     * @var string
     */
    public $user;
 
    /**
     * is user admin.
     *
     * @var string
     */
    public $isAdmin;
 
    /**
     * Create the component instance.
     *
     * @param  string  $user
     * @param  string  $isAdmin
     * @return void
     */
    public function __construct($user, $isAdmin)
    {
        $this->user = $user;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.index');
    }
}
