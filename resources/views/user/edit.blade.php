<x-app>
    <div class="card">
        <div class="card-header">
            Edit Data user
            <div class="card-title">
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/user', $user->id) }}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="text" name="nama" value="{{ $user->username }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">nama</label>
                            <input type="text" name="username" value="{{ $user->nama }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">email</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">agama</label>
                            <input type="text" name="agama" value="{{ $user->agama }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">jenis_akun</label>
                            <input type="text" name="jenis_akun" value="{{ $user->jenis_akun }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">jenis_kelamin</label>
                            <input type="text" name="jenis_kelamin" value="{{ $user->jenis_kelamin }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">tanggal_lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">umur</label>
                            <input type="Number" name="umur" value="{{ $user->Umur }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">password</label>
                            <input type="password" name="password" class="form-control"
                                placeholder="masukkan pasword anda">
                        </div>
                    </div>
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary float-right">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
