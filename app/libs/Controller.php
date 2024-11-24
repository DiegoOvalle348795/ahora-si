
<?php

class Controller
{
    public function view($view, $params = []) {
        $file = URL_APP . "/view/" . $view . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            echo "The view doesn't exist: " . $file;
        }
    }

    public function model($model) {
        require_once URL_APP . "/model/" . $model . ".php";
        return new $model;
    }
}
