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

            <?php foreach ($autores as $autor) { ?>
                <div class="col-md-4">
                    <img class="img-responsive img-circle" src="http://placehold.it/200x200" alt="">
                </div>
                <div class="col-md-8 ">
                    <h2>
                        <?= $autor->nome ?>
                    </h2>
                    <hr>
                    <p> <?= $autor->historico ?> </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                    <hr>
                </div>
            <?php } ?>

        </div>