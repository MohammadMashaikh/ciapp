<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Articles<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Articles</h1>

<a href="<?= url_to("Articles::new") ?>">New Article</a>

<?php foreach ($articles as $article) { ?>
    <h1><a href="<?= site_url('/articles/' . $article['id']) ?>"><?= esc($article['title']) ?></a></h1>
    <p><?= esc($article['content']) ?></p>
<?php } ?>

<?= $this->endSection() ?>