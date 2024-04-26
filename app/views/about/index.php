<div class="jumbotron">
    <h1 class="display-4">Wellcome, About Me</h1>
    <img src="<?= BASEURL; ?>/img/keren.png" alt="">
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
        featured content or information.</p>
    <hr class="my-4">
    <p>Halo nama saya
    <?= $data['nama'] ?> , pekerjaan
    <?= $data['pekerjaan'] ?> , umur :
    <?= $data['umur'] ?>
</p>
    <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>/about/page" role="button">Page</a>
</div>
