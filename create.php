<h2>Create News</h2>

<form action="/news/create" method="post">
    <?= csrf_field() ?>
    <label for="title">Title</label>
    <input type="text" name="title" required><br>

    <label for="body">Body</label>
    <textarea name="body" required></textarea><br>

    <input type="submit" value="Submit">
</form>
