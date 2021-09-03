<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Página Inicial -
                <small>Postagens Recentes</small>
            </h1>

            <?php foreach ($publicacoes as $publicacao) { ?>
                <h2>
                    <a href=" <?= base_url('postagem/'.$publicacao->id.'/'.limpar($publicacao->titulo)) ?> "> <?= $publicacao->titulo; ?> </a>
                </h2>
                <p class="lead">
                    por <a href="index.php"> <?= $publicacao->user ?> </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Postado em <?= postadoem($publicacao->data); ?></p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?= $publicacao->subtitulo; ?></p>
                <a class="btn btn-primary" href=" <?= base_url('postagem/'.$publicacao->id.'/'.limpar($publicacao->titulo)) ?> ">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
            <?php } ?>

        </div>