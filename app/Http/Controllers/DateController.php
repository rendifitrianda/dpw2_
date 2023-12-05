<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Date;


class DateController extends Controller
{
    function index()
    {
        if(request('verified')){
            $status_verify = request('verified');
            if($status_verify == 1){
                $data['list_date'] = Date::whereNotNull('verified_at')->get();
            } else {
                $data['list_date'] = Date::whereNull('verified_at')->get();
            }
        }
        elseif(request('nama')) {
            $nama = "%" . request('nama') . "%"; // %Reza%
            $data['list_date'] = Date::where('nama', 'like', $nama)->get();
        } elseif('request'('jenis_kelamin')){
            $data['list_date'] = Date::where('jenis_kelamin', request('jenis_kelamin'))->get();
        } elseif('request'('agama')){
            $list_agama = [];
            foreach(request('agama') as $agama => $value) {
                $list_agama[] = $agama;
            }
            $data['list_date'] = Date::wherein('agama', $list_agama)->get();
        }  elseif('request'('umur_mulai')) {
            $umur_mulai = request('umur_mulai');
            $umur_akhir = request('umur_akhir');
            if($umur_akhir){
                $data['list_date'] = Date::whereBetween('umur', [$umur_mulai, $umur_akhir])->get();
            } else {
                $data['list_date'] = Date::where('umur','>', request('umur_mulai'))->get();
            }
        }else {
            $data['list_date'] = Date::all();

        }
        return view('date.index', $data);
    }

    function create()
    {
        return view('date.create');
    }

    function store()
    {
        $date = new Date;
        $date->nim = request('nim');
        $date->nama = request('nama');
        $date->verified_at = request('verified_at');
        $date->prodi = request('prodi');
        $date->alamat = request('alamat');
        $date->email = request('email');
        $date->agama = request('agama');
        $date->jenis_akun = request('jenis_akun');
        $date->jenis_kelamin = request('jenis_kelamin');
        $date->tanggal_lahir = request('tanggal_lahir');
        $date->umur = request('umur');
        $date->save();

        return redirect('admin/date');
    }

    function show(date $date)
    {
        $data['date'] = $date;
        return view('date.show', $data);
    }

    function edit(date $date)
    {
        $data['date'] = $date;
        return view('date.edit', $data);
    }

    function update(Date $date)
    {
        $date->nim = request('nim');
        $date->nama = request('nama');
        $date->verified_at = request('verified_at');
        $date->prodi = request('prodi');
        $date->alamat = request('alamat');
        $date->email = request('email');
        $date->agama = request('agama');
        $date->jenis_akun = request('jenis_akun');
        $date->jenis_kelamin = request('jenis_kelamin');
        $date->tanggal_lahir = request('tanggal_lahir');
        $date->umur = request('umur');
        $date->save();

        return redirect('admin/date');
    }

    public function destroy(Date $date){
        $date->delete();

        return redirect('admin/date');
    }
}
