<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                <?= $titulo  ?> <small>>
                    <?php
                    if ($subtitulo != '') {
                        echo $subtitulo;
                    } else {
                        foreach ($subtitulodb as $titulodb) {
                            echo $titulodb->titulo;
                        }
                    } ?>
                </small>
            </h1>

            <?php foreach ($publicacoes as $publicacao) { ?>
                <h2>
                    <a href=" <?= base_url('postagem/' . $publicacao->id . '/' . limpar($publicacao->titulo)) ?> "> <?= $publicacao->titulo; ?> </a>
                </h2>
                <p class="lead">
                    por <a href=" <?= base_url('autor/' . $publicacao->id_autor . '/' . limpar($publicacao->nome_autor)); ?>"> <?= $publicacao->nome_autor ?> </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Postado <?= postadoem($publicacao->data); ?></p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?= $publicacao->subtitulo; ?></p>
                <a class="btn btn-primary" href=" <?= base_url('postagem/' . $publicacao->id . '/' . limpar($publicacao->titulo)) ?> ">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
            <?php } ?>

        </div>