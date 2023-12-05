<x-app>
    <div class="card">
        <div class="card-header">
            Tambah Data user
            <div class="card-title">
            </div>

        </div>
        <div class="card-body">
            <form method="post" action=" {{ url('admin/user') }}">

                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Username </label>
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Nama </label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">agama</label>
                            <select name="agama" class="form-control">
                                <option value=""></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">jenis akun</label>
                            <input type="text" name="jenis_akun" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">jenis kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value=""></option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">umur</label>
                            <input type="number" name="umur" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">password</label>
                            <input type="password" name="password" class="form-control"
                                placeholder="masukkan password anda">
                        </div>
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
