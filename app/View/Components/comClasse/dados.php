<?php

namespace App\View\Components\comClasse;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dados extends Component
{
    /**
     * Create a new component instance.
     */

    public $dado;
    public $dadoPHP;
     
    public function __construct($dado, $dadoPHP) //aqui no construtor, ele recebe a variável dado passada pelo html
    {
        //
        $this->dado = $dado; //a variável public $dado agora contem o conteudo passado
        $this->dadoPHP = $dadoPHP;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.com-classe.dados');
    }
}
