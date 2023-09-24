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
        $name =  $this->request()->input('name');
        $age =  $this->request()->input('age');
        echo "$name  $age";
    }


    // Правила:
    // 1. Контроллер должен наследоваться от абстрактного класса Controller
    // 2. Контроллер должен иметь методы index, add, store
    // 3. Метод index должен вызывать метод view с параметром movies
    // 4. Метод add должен вызывать метод view с параметром /admin/movies/add
    // 5. Метод store должен выводить на экран имя и возраст фильма
    // 6. Метод store должен быть аннотирован атрибутом #[NoReturn]
    // 7. Метод store должен получать данные из запроса
    // 8. Метод store должен выводить на экран имя и возраст фильма

    // Логика:

    // 1. Создайте метод index
    // 2. Создайте метод add
    // 3. Создайте метод store
    // 4. Создайте аннотацию #[NoReturn] для метода store
    // 5. Создайте метод view
    // 6. Создайте метод request
    // 7. Создайте метод setRequest
    // 8. Создайте метод setView

}