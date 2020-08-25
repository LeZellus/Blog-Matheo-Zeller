<?php $this->title = "Accueil"; ?>

<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1>Hello World, my name is Mathéo</h1>
        </header>
        <div class="content">
            <p>My first blog, about CSS, integration and more ...</p>
            <ul class="actions">
                <li><a href="#one" class="button next scrolly">Let's code</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Main -->
<div id="main">
    <!-- One -->
    <section id="one" class="tiles">
        <?php
        foreach ($articles as $article) {
        ?>
            <article>
                <span class="image">
                    <img src="../public/img/pic01.jpg" alt="" />
                </span>
                <header class="major">
                    <h3><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>"><?= htmlspecialchars($article->getTitle()); ?></a></h3>
                    <p><?= htmlspecialchars($article->getContent()); ?></p>
                    <p><?= htmlspecialchars($article->getAuthor()); ?></p>
                    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
                </header>
            </article>
        <?php
        }
        ?>
    </section>
</div>