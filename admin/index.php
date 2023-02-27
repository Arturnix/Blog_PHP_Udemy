<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

$paginator = new Paginator($_GET['page'] ?? 1, 6, Article::getTotal($conn));

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset);

?>

<?php require '../includes/header.php'; ?>

<article><h2>Administration</h2>

<p class="new-article"><a class="new-article" href="new-article.php"><button type="button" class="btn btn-success btn-lg">New article</button></a></p>

<?php if (empty($articles)) : ?>
    <p>No articles found.</p>
<?php else: ?>
<table class="table table-striped">
    <thead>
        <th>Title</th>
        <th>Published</th>
    </thead>
    <tbody>
    <?php foreach ($articles as $article) : ?>
        <tr>
            <td>
                <a href="article.php?id=<?= $article['id']; ?>"><?= 
                htmlspecialchars($article['title']); ?></a>
            </td>
            <td>
                <?php if ($article['published_at']) : ?>
                    <time><?= $article['published_at'] ?></time>
                <?php else : ?>
                   Unpublished 
                   <button class="publish btn btn-light" data-id="<?= $article['id'] ?>">Publish</button>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</article>
    
        <?php require '../includes/pagination.php'; ?>

    <?php endif; ?>

<?php require '../includes/footer.php'; ?>