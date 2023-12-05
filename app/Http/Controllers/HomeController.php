<?php
namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    public function test($nama, $age)
    {
        echo "Nama adalah $nama <br>";
        echo "umur adalah $age";
    }



}
