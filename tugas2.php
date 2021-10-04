<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <title>upj.ac.id/pmb</title>
</head>

<body>
    <div class="top-head header-7" data-stickey="true">
        <div class="counteiner">
            <div class="row">
                <div class="col-sm-4 align-middle">
                    <div class="logo d-flex justify-content-center">
                        <a href="upj.ac.id/">
                            <img alt="logo" src="images/logo_upj.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 ms-auto">
                    <div class="media-bottom">
                        <br>
                        <h21 class="tittle-topa inter" style="font-size:18px;">INTEGRITY</h21>
                        <br>
                        <h21 class="tittle-topb profe" style="font-size:18px;">PROFESSIONALISM</h21>
                        <br>
                        <h21 class="tittle-topc entre" style="font-size:18px;">ENTREPRENEURSHIP</h21>
                    </div>
                </div>
            </div>
        </div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Tentang
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="ndropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                                <li><a class="dropdown-item" href="#">Tujuan & Sasaran</a></li>
                                <li><a class="dropdown-item" href="#">Funsi & Tugas</a></li>
                                <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Akreditasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dokumen Acuan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- AKHIR NAVBAR -->

        <!-- FORM -->
        <div class="container">
            <h6>Pendaftaran Online</h6>
            <form>
                <div class="mb-3">
                    <label for="JalurPenerimaan" class="form-label">Jalur Penerimaan Mahsiswa Baru *</label>
                    <select id="JalurPenerimaan" class="form-select">
                        <option>Pilih Jalur Penerimaan</option>
                        <option>Jalur Regguler</option>
                        <option>Jalur Bidikmisi (Kuota Telah Penuh)</option>
                        <option>Jalur Beasiswa Peringkat Raport</option>
                        <option>Jalur Beasiswa Ujian Saringan Masuk (USM)</option>
                        <option>Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah)</option>
                        <option>Jalur Beasiswa Lulusan Terbaik Sekolah</option>
                        <option>Jalur Beasiswa Prestasi Akademik dan Non Akademik</option>
                    </select>
                    <div class="mb-3">
                        <label for="NamaCalonMahasiswa" class="form-label">Nama Calon Mahasiswa (sesuai ijazah SMA) *</label>
                        <input type="text" id="NamaCalonMahasiswa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="TTL" class="form-label">Tempat/ Tanggal Lahir *</label>
                        <input type="text" id="TTL" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="JenisKelamin" class="form-label">Jenis Kelamin</label>
                        <select id="JenisKelamin" class="form-select">
                            <option>Pilih</option>
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Agama" class="form-label">Agama</label>
                        <select id="Agama" class="form-select">
                            <option>Pilih</option>
                            <option>Islam</option>
                            <option>Katolik</option>
                            <option>kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Status" class="form-label">Status</label>
                        <select id="Status" class="form-select">
                            <option>Pilih</option>
                            <option>Belum Menikah</option>
                            <option>Menikah</option>
                            <option>Janda</option>
                            <option>Duda</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Alamat " class="form-label">Alamat</label>
                        <textarea class="form-control" id="Alamat" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="KodePos" class="form-label">Kode Pos *</label>
                        <input type="text" id="KodePos" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="NoHandphone" class="form-label">No Handphone *</label>
                        <input type="text" id="NoHandphone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email *</label>
                        <input type="text" id="Email" class="form-control">
                    </div>
                </div>
            </form>
            <h6>DATA SEKOLAH ASAL CALON MAHASISWA</h6>
            <form>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="AsalSekolah" class="form-label">Asal Sekolah *</label>
                        <input type="text" id="AsalSekolah" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="TahunLulusan" class="form-label">Tahun Lulusan</label>
                        <input type="text" id="TahunLulusan" class="form-control">
                    </div>
                </div>
            </form>
            <h6>DATA ORANG TUA CALON MAHASISWA</h6>
            <form>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="NamaAyah" class="form-label">Nama Ayah *</label>
                        <input type="text" id="NamaAyah" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="NamaIbu" class="form-label">Nama Ibu *</label>
                        <input type="text" id="NamaIbu" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="AlamatOrangTua" class="form-label">Alamat *</label>
                        <textarea class="form-control" id="AlamatOrangTua" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="KodePosOrangTua" class="form-label">Kode Pos *</label>
                        <input type="text" id="KodePosOrangTua" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="NomerHandphoneOrangTua" class="form-label">Nomer Handphone *</label>
                        <input type="text" id="NomerHandphoneOrangTua" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="PendidikanAyah" class="form-label">Pendidikan Terakhir Ayah * </label>
                        <select id="PendidikanAyah" class="form-select">
                            <option>Pilih</option>
                            <option>A- Tidak Tamat SD</option>
                            <option>B- Tamat SD</option>
                            <option>C- Tamat SMP</option>
                            <option>D- Tamat SMA</option>
                            <option>E- Diploma (D1-D2)</option>
                            <option>F- Sarjana (D3)</option>
                            <option>G- Sarjana (S1)</option>
                            <option>H- Pascasarjana</option>
                            <option>I- Dokter (S3)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="PendidikanIbu" class="form-label">Pendidikan Terakhir Ibu * </label>
                        <select id="PendidikanIbu" class="form-select">
                            <option>Pilih</option>
                            <option>A- Tidak Tamat SD</option>
                            <option>B- Tamat SD</option>
                            <option>C- Tamat SMP</option>
                            <option>D- Tamat SMA</option>
                            <option>E- Diploma (D1-D2)</option>
                            <option>F- Sarjana (D3)</option>
                            <option>G- Sarjana (S1)</option>
                            <option>H- Pascasarjana</option>
                            <option>I- Dokter (S3)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="StatusAyah" class="form-label">Status Ayah * </label>
                        <select id="StatusAyah" class="form-select">
                            <option>Pilih</option>
                            <option>Masih Hidup</option>
                            <option>Sudah Meninggal</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="StatusIbu" class="form-label">Status Ibu * </label>
                        <select id="StatusIbu" class="form-select">
                            <option>Pilih</option>
                            <option>Masih Hidup</option>
                            <option>Sudah Meninggal</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="PekerjaanAyah" class="form-label">Pekerjaan Ayah *</label>
                        <input type="text" id="PekerjaanAyah" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="PekerjaanIbu" class="form-label">Pekerjaan Ibu *</label>
                        <input type="text" id="PekerjaanIbu" class="form-control">
                    </div>
                </div>
            </form>
            <h6>PEMINATAN PROGRAM STUDI</h6>
            <form>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="PilihanProgramStudi1" class="form-label">Pilihan Program Studi 1</label>
                        <select id="PilihanProgramStudi1" class="form-select">
                            <option>Pilih</option>
                            <option>Akuntasi</option>
                            <option>Menejemen</option>
                            <option>Psikologi</option>
                            <option>Ilmu Komunikasi</option>
                            <option>Desain Produk Visual</option>
                            <option>Desain Komunikasi Visual</option>
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Teknik Sipil</option>
                            <option>Aristektur</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="PilihanProgramStudi2" class="form-label">Pilihan Program Studi 2</label>
                        <select id="PilihanProgramStudi2" class="form-select">
                            <option>Pilih</option>
                            <option>Akuntasi</option>
                            <option>Menejemen</option>
                            <option>Psikologi</option>
                            <option>Ilmu Komunikasi</option>
                            <option>Desain Produk Visual</option>
                            <option>Desain Komunikasi Visual</option>
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Teknik Sipil</option>
                            <option>Aristektur</option>
                        </select>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Sumber Informasi</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Internet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Majalah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option3">
                                <label class="form-check-label" for="gridRadios2">
                                    Brosur
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option4">
                                <label class="form-check-label" for="gridRadios2">
                                    Radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option5">
                                <label class="form-check-label" for="gridRadios2">
                                    Spanduk
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option6">
                                <label class="form-check-label" for="gridRadios2">
                                    Orang Tua
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option7">
                                <label class="form-check-label" for="gridRadios2">
                                    Teman
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option8">
                                <label class="form-check-label" for="gridRadios2">
                                    Pameran
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option9">
                                <label class="form-check-label" for="gridRadios2">
                                    Pihak Sekolah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option10">
                                <label class="form-check-label" for="gridRadios2">
                                    Lainnya...
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
            <h6>Ujian Saringan Masuk</h6>
            <form>
                <fieldset class="row mb-3">
                    <p class="text-start">Lokasi: Kampus UPJ - Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413 Banten, Indonesia.</p>
                    <legend class="col-form-label col-sm-2 pt-0">Pilihan Gelombang</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Gelombang 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Gelombang 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option3">
                            <label class="form-check-label" for="gridRadios2">
                                Gelombang 3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option4">
                            <label class="form-check-label" for="gridRadios2">
                                Gelombang 4
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-second" type="button">Submit</button>
                    <button class="btn btn-second" type="button">Reset</button>
                </div>
            </form>

        </div>
        <!-- AKHIR FORM -->
    </div>
    <!-- FOOTER -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2017. Web Design and Development By Faberhost Indonesia All rights reserved.
        </div>
        <!-- Copyright -->
    </footer>
    <!-- AKHIR FOOTER -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>