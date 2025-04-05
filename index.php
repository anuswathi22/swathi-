<h2>News List</h2>

<?php foreach ($news as $item): ?>
    <h3><?= esc($item['title']) ?></h3>
    <p><a href="/news/<?= esc($item['slug']) ?>">Read More</a></p>
<?php endforeach ?>
