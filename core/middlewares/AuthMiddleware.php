<?php


namespace app\core\middlewares;


use app\core\Application;
use app\core\exceptions\ForbiddenException;

class AuthMiddleware extends BaseMiddlewares
{
    public array $acttions = [];

    /**
     * AuthMiddleware constructor.
     *
     * @param array $actions
     */

    public function __construct(array $actions = [])
    {
        $this->acttions = $actions;
    }

    public function execute()
  {
      if(Application::isGuest()){
         if(empty($this->acttions) || in_array(Application::$app->controller->action,$this->acttions)){
             throw new ForbiddenException();
         }

      }
  }
}