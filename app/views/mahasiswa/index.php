
<div class="container mt-4">

    <!-- Notifikasi -->
    <div class="row">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- Tombol Tambah Data -->
    <div class="row mb-3">
        <div class="col-lg-12">
            <button type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <!-- Daftar Mahasiswa -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex
                               justify-content-between
                               align-items-center">

                        <span>
                            <?= htmlspecialchars($mhs['nama']); ?>
                        </span>

                        <div>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                               class="badge badge-primary">
                                Detail
                            </a>
                            

                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
                               class="badge badge-danger mr-2"
                               onclick="return confirm('Yakin ingin menghapus data ini?');">
                                Hapus
                            </a>
                        </div>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

<!-- Modal Tambah Data Mahasiswa -->
<div class="modal fade"
     id="formModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Tambah Data Mahasiswa
                </h5>

                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= BASEURL; ?>/mahasiswa/tambah"
                  method="post">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text"
                               class="form-control"
                               id="nama"
                               name="nama"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text"
                               class="form-control"
                               id="nim"
                               name="nim"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email"
                               class="form-control"
                               id="email"
                               name="email"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control"
                                id="jurusan"
                                name="jurusan"
                                required>
                            <option value="Teknik Informatika">
                                Teknik Informatika
                            </option>
                            <option value="Sistem Informasi">
                                Sistem Informasi
                            </option>
                            <option value="Manajemen Informatika">
                                Manajemen Informatika
                            </option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">
                        Tutup
                    </button>

                    <button type="submit"
                            class="btn btn-primary">
                        Tambah Data
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
