<?php namespace App\Http\Controllers;

use App\Models\Pengguna;

class AuthController extends Controller
{
    function ShowLoginform()
    {
        return view ('login');
    }



    function login()
    {
        $credential = [
            'email' => request('email'),
            'password' => request('password'),
        ];
       if (auth()->attempt($credential)){
            return redirect('admin');
       }

       return back()->with('error', 'login gagal');
    }

    public function longout()
    {
        auth()->longout();

        return redirect('login');
    }

}






