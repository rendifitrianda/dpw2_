<x-app>
    <div class="card">
        <div class="card-header">
            <form action="{{ url('admin/date') }}" method="get">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Status verifikasi</label>
                            <select name="verified" class="form-control">
                                <option value=""></option>
                                <option value="1">Terverifikasi</option>
                                <option value="0">Belum Terverifikasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value=""></option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Agama</label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="agama[Islam]" id="">
                                <label for="" class="form-check-label">Islam</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="agama[Kristen]" id="">
                                <label for="" class="form-check-label">Kristen</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="agama[Katolik]" id="">
                                <label for="" class="form-check-label">Katolik</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="agama[Buddha]" id="">
                                <label for="" class="form-check-label">Buddha</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="agama[Hindu]" id="">
                                <label for="" class="form-check-label">Hindu</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="agama[Konghucu]" id="">
                                <label for="" class="form-check-label">Konghucu</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Umur Mulai Dari</label>
                                    <input type="text" class="form-control" name="umur_mulai" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Umur Sampai Dengan</label>
                                    <input type="text" class="form-control" name="umur_akhir" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success float-right"><i class="fa fa-search"></i> Filter</button>
            </form>
        </div>
        <div class="card-header">
            <div class="card-title">
                Data date
            </div>
            <a href="{{ url('admin/date/create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i> Tambah date
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered  table-hover" id="table_pengguna">
                <thead>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>nim</th>
                    <th>Status Verifikasi</th>
                    <th>prodi</th>
                    <th>alamat</th>
                    <th>email</th>
                    <th>Agama</th>
                    <th>Jenis akun</th>
                    <th>jenis kelamin</th>
                    <th>tanggal lahir</th>
                    <th>umur</th>
                </thead>
                <tbody>
                    @foreach ($list_date as $date)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/date', $date->id) }}" class="btn btn-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="{{ url('admin/date', $date->id) }}/edit" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $date->id }}" />
                                </div>
                            </td>
                            <td>{{ $date->nama }}</td>
                            <td>{{ $date->nim }}</td>
                            <td>{{ $date->verified_at }}</td>
                            <td>{{ $date->prodi }}</td>
                            <td>{{ $date->alamat }}</td>
                            <td>{{ $date->email }}</td>
                            <td>{{ $date->agama }}</td>
                            <td>{{ $date->jenis_akun }}</td>
                            <td>{{ $date->jenis_kelamin }}</td>
                            <td>{{ $date->tanggal_lahir }}</td>
                            <td>{{ $date->umur }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('style')
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    @endpush

    @push('script')
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script>
            let table = new DataTable('#table_pengguna')
        </script>
    @endpush

</x-app>
