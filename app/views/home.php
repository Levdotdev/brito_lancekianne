<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Genshin CRUD-pact</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url();?>public/resources/logo.jpg">
    <link rel="stylesheet" href="<?= base_url();?>public/css/style.css">
</head>
<body style="background-image: url('<?= base_url()?>public/resources/jenshin.gif'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <h1 style="color: yellow;">Genshin Characters</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Character</th>
                <th>Element</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(html_escape($chars) as $char): ?>
                <tr>
                    <td><?= $char['id']; ?></td>
                    <td><?= $char['name']; ?></td>
                    <td><?= $char['class']; ?></td>
                    <td>
                        <a href="<?= site_url('update/'.$char['id']); ?>" class="btn btn-update">Update</a>
                        <a href="<?= site_url('soft-delete/'.$char['id']); ?>" class="btn btn-trash">Trash</a>
                        <a href="<?= site_url('delete/'.$char['id']); ?>" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="btn-links">
        <a href="<?= base_url('create'); ?>" class="btn btn-create">+ Create Record</a>
        <a href="<?= site_url('trash'); ?>" class="btn btn-bin">🗑️ Trash Bin</a>
    </div>
</body>
</html>