<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

if (isset($_GET['id'])) {

    $articles = Article::getWithCategories($conn, $_GET['id']);

} else {
    $articles = null;
}

?>
<?php require '../includes/header.php'; ?>

    <?php if ($articles) : ?>

        <article>
                <h2><?= htmlspecialchars($articles[0]['title']); ?></h2>

                <?php if ($articles[0]['published_at']) : ?>
                        <time><?= $articles[0]['published_at'] ?></time>
                    <?php else : ?>
                       Unpublished 
                    <?php endif; ?>

                <?php if ($articles[0]['category_name']) : ?>
                    <p>Categories:
                        <?php foreach ($articles as $a) : ?>
                            <?= htmlspecialchars($a['category_name']); ?>
                        <?php endforeach; ?>
                    </p>
                <?php endif; ?>

                <?php if ($articles[0]['image_file']) : ?>
                    <img src="/OOP/uploads/<?= $articles[0]['image_file'] ; ?>">
                <?php endif; ?>

                <p><?= htmlspecialchars($articles[0]['content']); ?></p>
        </article>

                <a href="edit-article.php?id=<?= $articles[0]['id']; ?>"><button class="btn btn-outline-info">Edit</button></a>
                <a class="delete" href="delete-article.php?id=<?= $articles[0]['id']; ?>"><button class="btn btn-outline-danger">Delete</button></a>
                <a href="edit-article-image.php?id=<?= $articles[0]['id']; ?>"><button class="btn btn-outline-info">Edit image</button></a>                

    <?php else: ?>
    
        <p>No articles found.</p>  
           
    <?php endif; ?>

    <a href="/OOP/admin/?page=1"><button class="btn btn-outline-success">Back to home page</button></a>

<?php require '../includes/footer.php'; ?>
