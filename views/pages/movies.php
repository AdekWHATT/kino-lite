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
                <h1>Фильмы</h1>
            </div>
        </div>
    </div>

<?php
try {
    $view->component('end');
} catch (ViewNotFoundException $e) {
} ?>