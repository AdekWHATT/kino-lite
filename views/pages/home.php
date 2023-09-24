<?php

/**
 * @var \App\Kernel\View\View $view
 */

$view->component('start'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Главная</h1>
        </div>
    </div>
<?php $view->component('banner'); ?>
<?php $view->component('end'); ?>