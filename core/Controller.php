<?php


namespace app\core;


use app\core\middlewares\BaseMiddlewares;

class Controller
{

    public string $layout = 'main';
    public string $action = '';

    /**
     * @var BaseMiddlewares
     */

    protected array $middlewares = [];

    public function setLayout($layout){
       $this->layout = $layout;
    }

    public function render($view, $params = []){
        return Application::$app->view->renderView($view,$params);
    }

    public function registerMiddleware(BaseMiddlewares $middleware){
        $this->middlewares[] = $middleware;
    }

    /**
     * @return BaseMiddlewares
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }



}