<x-app>
    <div class="card-header">
        <div class="card-title">Detail user</div>
        <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning float-right">
            <i class="fas fas-edit"></i>
            Edit
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <dl>
                    <dt>Username </dt>
                    <dd>{{ $user->username }}</dd>
                    <dt>nama </dt>
                    <dd>{{ $user->nama }}</dd>
                    <dt>email</dt>
                    <dd>{{ $user->email }}</dd>
                    <dt>agama</dt>
                    <dd>{{ $user->agama }}</dd>
                    <dt>jenis_akun</dt>
                    <dd>{{ $user->jenis_akun }}</dd>
                    <dt>jenis_kelamin</dt>
                    <dd>{{ $user->jenis_kelamin }}</dd>
                    <dt>tanggal lahir</dt>
                    <dd>{{ $user->tanggal_lahir }}</dd>
                    <dt>umur</dt>
                    <dd>{{ $user->umur }}</dd>

                </dl>
            </div>
            <div class="col-md-6">
                <img src="{{ $user->foto }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
</x-app>
