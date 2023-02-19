<?php

namespace App\View\Components\admin;

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
     * reservation list.
     *
     * @var string
     */
    public $testimonial;
 
    /**
     * Create the component instance.
     *
     * @param  string  $user
     * @param  string  $isAdmin
     * @param  array  $testimonial
     * @return void
     */
    public function __construct($user, $isAdmin, $testimonial = null)
    {
        $this->user = $user;
        $this->isAdmin = $isAdmin;
        if(!null) {
            $this->testimonial = $testimonial;
        }
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
