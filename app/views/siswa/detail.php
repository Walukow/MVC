<div class="container mt-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['siswa']['nama'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['jurusan'] ?></h6>
            <p class="card-text"><?= $data['siswa']['umur'] ?></p>
            <a href="<?= BASEURL; ?>/siswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>