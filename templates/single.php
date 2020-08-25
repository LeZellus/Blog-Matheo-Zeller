<?php $this->title = "Article"; ?>

<div id="main" class="alt">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1><?= htmlspecialchars($article->getTitle()); ?></h1>
            </header>
            <span class="image main"><img src="../public/img/pic11.jpg" alt="" /></span>
            <p><?= htmlspecialchars($article->getContent()); ?></p>
            <p><?= htmlspecialchars($article->getAuthor()); ?></p>
            <p>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
        </div>
    </section>

    <a href="../public/index.php" class="button next scrolly">Retour à l'accueil</a>
    <div id="comments" class="text-left" style="margin-left: 50px">
        <h2>Commentaires</h2>
        <?php
        foreach ($comments as $comment) {
        ?>
            <h4><?= htmlspecialchars($comment->getPseudo()); ?></h4>
            <p><?= htmlspecialchars($comment->getContent()); ?></p>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt()); ?></p>
        <?php
        }
        ?>
    </div>

</div>