<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\View\View;
use JetBrains\PhpStorm\NoReturn;

class MovieController extends  Controller
{
    public function index(): void
    {
        $this->view('movies');
    }
    // http://kinolite/admin/movies/add

    public function add(): void
    {
        $this->view('/admin/movies/add');
    }

    #[NoReturn] public function store(): void
    {

        dd($this->request()->input('name'));

    }
}