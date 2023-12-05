<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Faker\Factory as Faker;

class UserController extends Controller
{
    function index()
    {
        if(request('verified')){
            $status_verify = request('verified');
            if($status_verify == 1){
                $data['list_user'] = User::whereNotNull('verified_at')->get();
            } else {
                $data['list_user'] = User::whereNull('verified_at')->get();
            }
        }
        elseif(request('nama')) {
            $nama = "%" . request('nama') . "%"; // %Reza%
            $data['list_user'] = User::where('nama', 'like', $nama)->get();
        } elseif('request'('jenis_kelamin')){
            $data['list_user'] = User::where('jenis_kelamin', request('jenis_kelamin'))->get();
        } elseif('request'('agama')){
            $list_agama = [];
            foreach(request('agama') as $agama => $value) {
                $list_agama[] = $agama;
            }
            $data['list_user'] = User::wherein('agama', $list_agama)->get();
        }  elseif('request'('umur_mulai')) {
            $umur_mulai = request('umur_mulai');
            $umur_akhir = request('umur_akhir');
            if($umur_akhir){
                $data['list_user'] = User::whereBetween('umur', [$umur_mulai, $umur_akhir])->get();
            } else {
                $data['list_user'] = User::where('umur','>', request('umur_mulai'))->get();
            }
        }else {
            $data['list_user'] = User::all();

        }
        return view('user.index', $data);
    }

    function create()
    {
        return view('user.create');
    }

    function store()
    {
        $user = new User;
        $user->username = request('username');
        $user->nama = request('nama');
        $user->verified_at = request('verified_at');
        $user->email = request('email');
        $user->agama = request('agama');
        $user->jenis_akun = request('jenis_akun');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->tanggal_lahir = request('tanggal_lahir');
        $user->umur = request('umur');
        if(request('password')) $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    function show(user $user)
    {
        $data['user'] = $user;
        return view('user.show', $data);
    }

    function edit(user $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);
    }

    function update(User $user)
    {
        $user->username = request('username');
        $user->nama = request('nama');
        $user->verified_at = request('verified_at');
        $user->email = request('email');
        $user->agama = request('agama');
        $user->jenis_akun = request('jenis_akun');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->tanggal_lahir = request('tanggal_lahir');
        $user->umur = request('umur');
        if(request('password')) $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    public function destroy(User $user){
        $user->delete();

        return redirect('admin/user');
    }

}
