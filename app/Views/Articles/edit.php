<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Edit Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Edit Article</h1>


<?php if (session()->has("errors")) : ?>
    <ul>
        <?php foreach (session("errors") as $error) : ?>
            <div class="alert alert-danger text-center w-25" role="alert">
                <?= $error ?>
            </div>

        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<?= form_open("articles/update/" . $article["id"]) ?>
<label class="form-label" for="title">Title</label>
<input class="form-control w-50" type="text" id="title" name="title" value="<?= old("title", esc($article['title'])) ?>">

<label class="form-label" for="content">Content</label>
<textarea class="form-control w-50" id="content" name="content" value="<?= old("content", esc($article['content'])) ?>"><?= old("content", esc($article['content'])) ?></textarea>

<button class="btn btn-success mt-2">Save</button>
</form>

<?= $this->endSection() ?>