<?php
namespace App\View\Components;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class Header extends Component
{
    public function index(){
        return view('header');
    }
    public $name;
    public $fruits;
}