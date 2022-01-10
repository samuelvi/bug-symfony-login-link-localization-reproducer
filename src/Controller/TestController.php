<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


// Checking that the localized routing works properly:
// - http://localhost:8000/hello-world => should display "Hello World"
// - http://localhost:8000/en-us/hello-world => should display "Hello World"
// - http://localhost:8000/es-es/hello-world => should display "Hello World"
//
// Checking that the LoginLink internal routing behaves differently, depending on the localized route:
// - http://localhost:8000/user/login-check => Shows "Login Check"
// - http://localhost:8000/es-es/user/login-check => Redirects to the login page

final class TestController extends AbstractController
{
    /**
     * @Route("/hello-world", name="hello_world")
     */
    public function helloWorld()
    {
        die("Hello World");
    }

    /**
     * @Route("/user/login-check", name="login_check")
     */
    public function loginCheck()
    {
        die("Login Check");
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        die("Login");
    }
}
