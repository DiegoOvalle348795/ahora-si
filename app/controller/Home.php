
<?php

class Home extends Controller
{
    private $home;

    public function __construct()
    {
        $this->home = $this->model("users");
    }

    public function index() 
    {
        $this->view('pages/login');
    }

    public function login()
    {
        echo "Entering login method";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "Processing POST request";
            // Handle POST request logic (e.g., login authentication)
        } else {
            echo "Loading login view";
            $this->view('pages/login');
        }
    }

    public function register()
    {
        echo "Entering register method";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "Processing POST request";
            // Handle POST request logic (e.g., user registration)
        } else {
            echo "Loading register view";
            $this->view('pages/registe');
        }
    }
}
