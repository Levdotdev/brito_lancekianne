<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin CRUD-pact</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url();?>public/resources/logo.jpg">
    <link rel="stylesheet" href="<?= base_url();?>public/css/style.css">
</head>
<body style="background-image: url('<?= base_url()?>public/resources/jenshin.gif'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <h1>Insert Character</h1>
    <div class="login-box">
    <form action="<?=site_url('create')?>" method="post">
        <input type="text" name="name" id="name" placeholder="Character Name" required><br><br>
        <label for="class" style="color:white;">Class</label>
        <select name="class" id="class" required>
            <option value="Pyro">Pyro</option>
            <option value="Cryo">Cryo</option>
            <option value="Geo">Geo</option>
            <option value="Hydro">Hydro</option>
            <option value="Anemo">Anemo</option>
            <option value="Electro">Electro</option>
            <option value="Dendro">Dendro</option>
        </select><br><br>
        <input type="submit" value="Insert"></button>
    </form>
</div><br>

    <div class="btn-links">
        <a href="<?= site_url(''); ?>" class="btn btn-create"><- Back</a>
    </div>

    <script>
        window.addEventListener('load', function () {
        document.getElementById('name').focus();
        });

        document.getElementById("name").addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            document.getElementById("class").focus();
            event.preventDefault(); 
        }
    });
    </script>
</body>
</html>