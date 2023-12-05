<x-app>
    <div class="card">
        <div class="card-header">
            Edit Data Mahasiswa
            <div class="card-title">
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/date', $date->id) }}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama date</label>
                            <input type="text" name="nama" value="{{ $date->nama }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">nim</label>
                            <input type="number" name="nim" value="{{ $date->nim }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">prodi</label>
                            <input type="text" name="prodi" value="{{ $date->prodi }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">alamat</label>
                            <input type="text" name="alamat" value="{{ $date->alamat }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">email</label>
                            <input type="text" name="email" value="{{ $date->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">jenis_akun</label>
                            <input type="text" name="jenis_akun" value="{{ $date->jenis_akun }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">jenis_kelamin</label>
                            <input type="text" name="jenis_kelamin" value="{{ $date->jenis_kelamin }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">tanggal_lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ $date->tanggal_lahir }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">umur</label>
                            <input type="text" name="umur" value="{{ $date->umur }}" class="form-control">
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
