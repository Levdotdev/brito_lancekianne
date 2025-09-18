<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin CRUD-pact</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url();?>public/resources/logo.jpg">
    <link rel="stylesheet" href="<?= base_url();?>public/css/home.css">
</head>
<body style="background-image: url('<?= base_url();?>public/resources/jenshin.gif'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <h1>Update Character</h1>
    <div class="login-box">
    <form action="<?=site_url('update/'.$char['id']);?>" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" size="20" />
        <input type="text" name="name" id="name" placeholder="Character Name" value="<?=html_escape($char['name']);?>" required><br><br>
        <label for="class" style="color:white;">Class</label>
        <select name="class" id="class" required>
            <option value="Pyro" <?php if(html_escape($char['class']) == "Pyro") echo "selected"; ?>>Pyro</option>
            <option value="Cryo" <?php if(html_escape($char['class']) == "Cryo") echo "selected"; ?>>Cryo</option>
            <option value="Geo" <?php if(html_escape($char['class']) == "Geo") echo "selected"; ?>>Geo</option>
            <option value="Hydro" <?php if(html_escape($char['class']) == "Hydro") echo "selected"; ?>>Hydro</option>
            <option value="Anemo" <?php if(html_escape($char['class']) == "Anemo") echo "selected"; ?>>Anemo</option>
            <option value="Electro" <?php if(html_escape($char['class']) == "Electro") echo "selected"; ?>>Electro</option>
            <option value="Dendro" <?php if(html_escape($char['class']) == "Dendro") echo "selected"; ?>>Dendro</option>
        </select><br><br>
        <input type="submit" value="Update"></button>
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