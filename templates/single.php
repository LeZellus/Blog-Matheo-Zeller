<h2><?= htmlspecialchars($article->getTitle()); ?></h2>
<p><?= htmlspecialchars($article->getContent()); ?></p>
<p><?= htmlspecialchars($article->getAuthor()); ?></p>
<p>Créé le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
<?php
foreach ($comments as $comment) {
?>
    <h4><?= htmlspecialchars($comment->getPseudo()); ?></h4>
    <p><?= htmlspecialchars($comment->getContent()); ?></p>
    <p>Posté le <?= htmlspecialchars($comment->getCreatedAt()); ?></p>
<?php
}
?>