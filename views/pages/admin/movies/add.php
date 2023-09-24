<?php

/**
 * @var \App\Kernel\View\View $view
 */

use App\Kernel\Exception\ViewNotFoundException;

try {
    $view->component('start');
} catch (ViewNotFoundException $e) {
} ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Страница добавления</h1>
                <form action="/admin/movies/add" method="post">
                    <div class="movies-add-form__header">
                        <p>Имя</p>
                        <input type="text" name="name">
                        <p>Возраст</p>
                        <input type="number" name="age">
                    </div>
                    <br>
                    <button type="submit" value="">Добавить</button>
                </form>
            </div>
        </div>
    </div>

<?php
try {
    $view->component('end');
} catch (ViewNotFoundException $e) {
} ?>