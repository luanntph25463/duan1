<?php

class c_home {
    public function index() {
        $view = "./MVC/view/home/index.php"; // $view hướng đến link view
        include ("./MVC/templates/front-end/layout.php");
    }
    public function login() {
        $view = "./MVC/view/home/login.php"; // $view hướng đến link view
        include ("./MVC/templates/front-end/layout.php");
    }
    public function sign_up() {
        $view = "./MVC/view/home/sign_up.php"; // $view hướng đến link view
        include ("./MVC/templates/front-end/layout.php");
    }
}