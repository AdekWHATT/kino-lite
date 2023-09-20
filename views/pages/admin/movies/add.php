<?php

/**
 * @var \App\Kernel\View\View $view
 */

$view->component('start');?>

    <h1>Страница добавления фильма</h1>
    <form action="/admin/movies/add" method="post">
        <div class="movies-add-form__header">
            <input type="text" name="name">
        </div>
        <button type="submit" value="" >Добавить</button>
    </form>
<?php $view->component('end');?>