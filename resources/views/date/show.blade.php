<x-app>
    <div class="card-header">
        <div class="card-title">Detail date</div>
        <a href="{{ url('admin/date', $date->id) }}/edit" class="btn btn-warning float-right">
            <i class="fas fas-edit"></i>
            Edit
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <dl>
                    <dt>nama</dt>
                    <dd>{{ $date->nama }}</dd>
                    <dt>nim </dt>
                    <dd>{{ $date->nim }}</dd>
                    <dt>prodi </dt>
                    <dd>{{ $date->prodi }}</dd>
                    <dt>alamat </dt>
                    <dd>{{ $date->alamat }}</dd>
                    <dt>email</dt>
                    <dd>{{ $date->email }}</dd>
                    <dt>agama </dt>
                    <dd>{{ $date->agama }}</dd>
                    <dt>jenis_akun </dt>
                    <dd>{{ $date->jenis_akun }}</dd>
                    <dt>jenis_kelamin</dt>
                    <dd>{{ $date->jenis_kelamin }}</dd>
                    <dt>tanggal_lahir</dt>
                    <dd>{{ $date->tanggal_lahir }}</dd>
                    <dt>umur</dt>
                    <dd>{{ $date->umur }}</dd>

                </dl>
            </div>
            <div class="col-md-6">
                <img src="{{ $date->foto }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
</x-app>
