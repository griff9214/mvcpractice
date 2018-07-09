<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 007 07.07.18
 * Time: 12:35
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . "/config/routes.php";
        $this->routes = include $routesPath;

    }

    private function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     * @return mixed
     */
    public function run()
    {
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $this->getUri(), $matches)) {

                //ищем совпадение с шаблоном и делаем подстановку данных в роут
                $controllerPath = preg_replace("~$uriPattern~", $path, $this->getUri());

                //определение имени контроллера и метода исходя из роута
                $controllerInfo = explode('/', $controllerPath);
                $controllerName = array_shift($controllerInfo);
                $actionName = array_shift($controllerInfo);

                $controllerName = ucfirst($controllerName)."Controller";
                $actionName = "action".ucfirst($actionName);

                //инклуд класса
                $controllerSource = ROOT."/Controllers/{$controllerName}.php";
                if(file_exists($controllerSource)){
                    include_once $controllerSource;
                }

                //создание экземпляра класса
                $controller = new $controllerName;

                //вызов метода с передачей массива в качестве параметров
                call_user_func_array([$controller, $actionName], $controllerInfo);
                break;
            }
        }
    }
}