<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */

    public $user;
    public $placeUser;
    public $senha;
    public $placeSenha;

    public function __construct($user, $placeUser, $senha, $placeSenha)
    {
        $this->user = $user;
        $this->placeUser = $placeUser;
        $this->senha = $senha;
        $this->placeSenha = $placeSenha;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
