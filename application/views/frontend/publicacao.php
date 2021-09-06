<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php foreach ($publicacoes as $publicacao) { ?>
                <h1>
                    <?= $publicacao->titulo; ?>
                </h1>
                <p class="lead">
                    por <a href=" <?= base_url('autor/' . $publicacao->id_autor . '/' . limpar($publicacao->nome_autor)); ?>"> <?= $publicacao->nome_autor ?> </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Postado <?= postadoem($publicacao->data); ?></p>
                <hr>
                <p><?= $publicacao->titulo; ?></p>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?= $publicacao->conteudo; ?></p>

                <hr>
            <?php } ?>

        </div>