<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_DIR;?>css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <h1>
                <a class="color p-5" href="<?= BASE_DIR; ?>Home/index/">
                    PHP ORIENTADO A OBJETOS
                </a>
            </h1>
        
            <ul>
                <li><a class="color" href="<?= BASE_DIR; ?>Home/index/">Home</a></li>
                <li><a class="color" href="<?= BASE_DIR; ?>User/index/">Users</a></li>
                <li class="final"><a class="color" href="<?= BASE_DIR; ?>User/new/">Register</a></li>
            </ul>
        </nav>
    </header>