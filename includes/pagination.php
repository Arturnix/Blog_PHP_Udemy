<?php $base = strtok($_SERVER["REQUEST_URI"], '?'); ?>

<nav>
  <ul class="pagination">
    <li class="page-item">
      <?php if ($paginator->previous) : ?>
      <a
        class="page-link"
        href="<?= $base; ?>?page=<?= $paginator->previous; ?>"
        >Previous</a
      >
      <?php else : ?>
      <span class="page-link disabled">Previous</span>
      <?php endif; ?>
    </li>
    
<?php for ($i = 1; $i <= $paginator->total_pages; $i++) : ?>
  <?php if (Url::getUrl() != ($base . "?page=" . $i)) : ?>
      <li class="page-item">
    <?php else : ?>
      <li class="page-item active">
      <?php endif; ?>
        <a class="page-link" href="<?= $base; ?>?page=<?= $i; ?>"><?= $i ?></a>
      </li>
  <?php endfor; ?>

    <li class="page-item">
      <?php if ($paginator->next) : ?>
      <a class="page-link" href="<?= $base; ?>?page=<?= $paginator->next; ?>"
        >Next</a
      >
      <?php else : ?>
      <span class="page-link disabled">Next</span>
      <?php endif; ?>
    </li>
  </ul>
</nav>
