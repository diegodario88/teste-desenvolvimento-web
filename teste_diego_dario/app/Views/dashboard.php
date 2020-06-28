<?= $this->extend('/common/default_layout') ?>
<?= $this->section('content') ?>
<style>
    .collapse-content .fa.fa-heart:hover {
        color: #f44336 !important;
    }

    .collapse-content .fa.fa-share-alt:hover {
        color: #0d47a1 !important;
    }
</style>

<!-- Button Modal -->
<div class="row mt-3" style="margin: 0 auto; display: flex; justify-content: center;">
    <a class="col-md-3 btn btn-primary btn-lg" data-toggle="modal" data-target="#modalPostForm">Crie uma postagem</a>
</div>

<!--Grid row-->
<div class="row mb-4" style="margin: 0 auto; display: flex; justify-content: center;">
    <!--Grid column-->
    <?php foreach ($posts as $indice => $post) : ?>
        <?= view('card',  ['indice' => $indice, 'post' => $post]) ?>
    <?php endforeach; ?>
    <!-- Modal Form Post -->
    <?= view('post-form') ?>
</div>
<!--Grid row-->
<?= $this->endSection() ?>