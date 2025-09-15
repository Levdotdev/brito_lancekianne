<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin CRUD-pact</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url();?>public/resources/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="<?= base_url();?>public/css/style.css">
</head>
<body style="background-image: url('<?= base_url();?>public/resources/jenshin.gif'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container mt-3 ">
	<form action="<?=site_url('');?>" method="get" class="col-sm-4 float-end d-flex">
		<?php
		$q = '';
		if(isset($_GET['q'])) {
			$q = $_GET['q'];
		}
		?>
        <input class="form-control me-2" name="q" type="text" placeholder="Search" value="<?=html_escape($q);?>">
        <button type="submit" class="btn btn-primary" type="button">Search</button>
	</form>
    <h1 style="color: yellow;">Genshin Characters</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Character</th>
                <th>Element</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(html_escape($all) as $char): ?>
                <tr>
                    <td><?= $char['id']; ?></td>
                    <td style="display:flex; justify-content:center; align-items:center;"><img src="<?=base_url().'public/'.$char['pic'];?>" height="60" width="60" alt="<?=$char['name'];?>"></td>
                    <td><?= $char['name']; ?></td>
                    <td><?= $char['class']; ?></td>
                    <td>
                        <a href="<?= site_url('update/'.$char['id']); ?>" class="btn btn-update">Update</a>
                        <a href="<?= site_url('soft-delete/'.$char['id']); ?>" class="btn btn-trash">Trash</a>
                        <a href="<?= site_url('delete-home/'.$char['id']); ?>" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php
	echo $page;?>
    </div>
    
    <div class="btn-links">
        <a href="<?= site_url('create'); ?>" class="btn btn-create">+ Create Record</a>
        <a href="<?= site_url('trash'); ?>" class="btn btn-bin">🗑️ Trash Bin</a>
    </div>
</body>
</html>