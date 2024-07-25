@extends('layout.template')

@section('content')
<div class="container-fluid" style="max-height: 800px;">
    <h3 class="text-start" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: #333;">
        Isi Form
    </h3>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="data-umum-tab" data-bs-toggle="tab" href="#data-umum" role="tab" aria-controls="data-umum" aria-selected="true">Data Umum</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="luas-rencana-tab" data-bs-toggle="tab" href="#luas-rencana" role="tab" aria-controls="luas-rencana" aria-selected="false">Luas Rencana</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="batasan-tab" data-bs-toggle="tab" href="#batasan" role="tab" aria-controls="batasan" aria-selected="false">Batasan</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="data-umum" role="tabpanel" aria-labelledby="data-umum-tab">
            <div class="p-3">
                <form>
                    <div class="mb-3 row">
                        <label for="idRekapPbg" class="col-sm-3 col-form-label text-start">ID Rekap PBG</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="idRekapPbg" name="idRekapPbg">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="namaPemohon" class="col-sm-3 col-form-label text-start">Nama Pemohon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namaPemohon" name="namaPemohon">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal" class="col-sm-3 col-form-label text-start">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggalRegistrasi" class="col-sm-3 col-form-label text-start">Tanggal Registrasi</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggalRegistrasi" name="tanggalRegistrasi">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nomorPbg" class="col-sm-3 col-form-label text-start">Nomor PBG</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomorPbg" name="nomorPbg">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="noPbg" class="col-sm-3 col-form-label text-start">No. PBG</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="noPbg" name="noPbg" value="317409" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-3 col-form-label text-start">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rt" class="col-sm-3 col-form-label text-start">RT</label>
                        <div class="col-sm-9">
                            <select id="rt" name="rt" class="form-select">
                                <option value="">Pilih RT</option>
                                <option value="1">001</option>
                                <option value="2">002</option>
                                <option value="3">003</option>
                                <option value="4">004</option>
                                <option value="5">005</option>
                                <option value="6">006</option>
                                <option value="7">007</option>
                                <option value="8">008</option>
                                <option value="9">009</option>
                                <option value="10">010</option>
                                <option value="11">011</option>
                                <option value="12">012</option>
                                <option value="13">013</option>
                                <option value="14">014</option>
                                <option value="15">015</option>
                                <option value="16">016</option>
                                <option value="17">017</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rw" class="col-sm-3 col-form-label text-start">RW</label>
                        <div class="col-sm-9">
                            <select id="rw" name="rw" class="form-select">
                                <option value="">Pilih RW</option>
                                <option value="1">001</option>
                                <option value="2">002</option>
                                <option value="3">003</option>
                                <option value="4">004</option>
                                <option value="5">005</option>
                                <option value="6">006</option>
                                <option value="7">007</option>
                                <option value="8">008</option>
                                <option value="9">009</option>
                                <option value="10">010</option>
                                <option value="11">011</option>
                                <option value="12">012</option>
                                <option value="13">013</option>
                                <option value="14">014</option>
                                <option value="15">015</option>
                                <option value="16">016</option>
                                <option value="17">017</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kelurahan" class="col-sm-3 col-form-label text-start">Kelurahan</label>
                        <div class="col-sm-9">
                            <select id="kelurahan" name="kelurahan" class="form-select">
                                <option value="">Pilih Kelurahan</option>
                                <option value="cipendek">Cipendek</option>
                                <option value="ciganjur">Ciganjur</option>
                                <option value="lentengAgung">Lenteng Agung</option>
                                <option value="srengsengSawah">Srengseng Sawah</option>
                                <option value="jagakarsa">Jagakarsa</option>
                                <option value="tanjungBarat">Tanjung Barat</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="irk" class="col-sm-3 col-form-label text-start">IRK</label>
                        <div class="col-sm-9">
                            <!-- Input field to toggle the dropdown -->
                            <input type="text" class="form-control" id="irk" name="irk" placeholder="Select IRK" readonly data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- Dropdown menu for checkboxes -->
                            <ul class="dropdown-menu" id="dropdownCheckbox">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="irk1" name="irk[]" value="irk1">
                                        <label class="form-check-label" for="irk1">IRK 1</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="irk2" name="irk[]" value="irk2">
                                        <label class="form-check-label" for="irk2">IRK 2</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="irk3" name="irk[]" value="irk3">
                                        <label class="form-check-label" for="irk3">IRK 3</label>
                                    </div>
                                </li>
                                <!-- Add more checkboxes as needed -->
                            </ul>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="luasLahan" class="col-sm-3 col-form-label text-start">Luas Lahan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="luasLahan" name="luasLahan" value="0,00">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="luasLahanSertifikat" class="col-sm-3 col-form-label text-start">Luas Lahan (Sertifikat)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="luasLahanSertifikat" name="luasLahanSertifikat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlahLantai" class="col-sm-3 col-form-label text-start">Jumlah Lantai</label>
                        <div class="col-sm-9">
                            <select id="jumlahLantai" name="jumlahLantai" class="form-select">
                                <option value="">Pilih Jumlah Lantai</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-3 col-form-label text-start">Status</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="status" name="status" value="Proses" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pbgStatus" class="col-sm-3 col-form-label text-start">PBG Terbit</label>
                        <div class="col-sm-9">
                            <select id="pbgStatus" name="pbgStatus" class="form-select">
                                <option value="">Pilih Status</option>
                                <option value="belum">Belum</option>
                                <option value="sudah">Sudah</option>
                            </select>
                        </div>
                    </div>

                    <!-- Field tambahan untuk "No. PBG Terbit" -->
                    <div class="mb-3 row" id="noPbgTerbitField" style="display: none;">
                        <label for="noPbgTerbit" class="col-sm-3 col-form-label text-start">No. PBG Terbit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="noPbgTerbit" name="noPbgTerbit">
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="tab-pane fade" id="luas-rencana" role="tabpanel" aria-labelledby="luas-rencana-tab">
            <div class="p-3">
                <form>
                    <div class="mb-3 row">
                        <label for="luasTanah" class="col-sm-2 col-form-label text-start">Luas Tanah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="luasTanah" name="luasTanah">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="luasBangunan" class="col-sm-2 col-form-label text-start">Luas Bangunan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="luasBangunan" name="luasBangunan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="batasan" role="tabpanel" aria-labelledby="batasan-tab">
            <div class="p-3">
                <form>
                    <div class="mb-3 row">
                        <label for="batasUtara" class="col-sm-2 col-form-label text-start">Batas Utara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="batasUtara" name="batasUtara">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="batasTimur" class="col-sm-2 col-form-label text-start">Batas Timur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="batasTimur" name="batasTimur">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="batasSelatan" class="col-sm-2 col-form-label text-start">Batas Selatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="batasSelatan" name="batasSelatan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="batasBarat" class="col-sm-2 col-form-label text-start">Batas Barat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="batasBarat" name="batasBarat">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection