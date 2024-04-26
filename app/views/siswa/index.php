<div class="container mt-3">
    <div class="row">
        <div class="col">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary tmblTambah" data-toggle="modal" data-target="#forModal">
                Tambah Data Siswa
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="<?= BASEURL; ?>/siswa/cari" method="post">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Cari Siswa..." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="sumbit" id="tmblCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Daftar siswa</h2>
            <ul class="list-group">
                <?php foreach ($data['siswa'] as $mhs): ?>
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $mhs['id']; ?>"
                            class="badge badge-primary float-right ml-1">Detail
                        </a>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $mhs['id']; ?>"
                            class="badge badge-success float-right ml-1 tampilModalEdit" data-toggle="modal"
                            data-target="#forModal" data-id="<?= $mhs['id']; ?>">Edit
                        </a>
                        <button type="button" class="btn badge badge-danger float-right ml-2" data-toggle="modal"
                            data-target="#hapus<?= $mhs['id']; ?>">
                            Hapus
                        </button>
                    </li>

                    <div class="modal fade" id="hapus<?= $mhs['id']; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI</h5>
                                </div>
                                <div class="modal-body">
                                    Kamu Akan Menghapus Siswa dengan Nama
                                    <?= $mhs['nama'] ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                    <a href="<?= BASEURL; ?>/siswa/hapus/<?= $mhs['id']; ?>"
                                        class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>