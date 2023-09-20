<?php

namespace App\Kernel\View;

use App\Kernel\Exception\ViewNotFoundException as Error;
class View
{
    /**
     * @throws Error
     */
    public function page(string $name): void
    {
        $viewPath = APP_PATH . "/views/pages/$name.php";
        if (!file_exists($viewPath)) {
            throw new Error("$name Ошибка страницы");
        }

        extract([
            'view' => $this
        ]);

        include_once $viewPath;
    }

    /**
     * @throws Error
     */
    public function component(string $name): void
    {
        $componentPath = APP_PATH . "/views/components/$name.php";
        if (!file_exists($componentPath)) {
            throw new Error("$name Ошибка компонента");
        }

        include_once $componentPath;
    }
}