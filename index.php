<?php 
    include __DIR__ . '/classes/User.php';
    include __DIR__ . '/classes/Moderator.php';
    // include __DIR__ . '/classes/Admin.php';
    // include __DIR__ . '/classes/Editor.php';

    $users = [
        new User('Raffaele','Baldassarre','raffbeta', 32, 'M'),
        new User('Alessandro','Internicola','Almado', 33, 'M'),
        new User('Tommaso','Figlia','tomm', 27, 'M'),
        new User('Federico','Scarpati','fedes', 30, 'M'),
        new User('Angela','Gallo','ange', 25, 'F'),
        new User('Pia','Gianguzzi','piax', 30, 'F'),
        new User('Francesco','Olivotti','brolyno', 29, 'M'),
    ];
        // var_dump($users);

    $moderators = [
        new Moderator('Angela','Gallo','ange', 25, 'F',0,1,1,1),
        new Moderator('Pia','Gianguzzi','piax', 30, 'F',0,1,1,1),
    ];
        // var_dump($moderators);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        margin-top: 100px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .card{
        padding: 30px;
        margin: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 45%;
        border: 2px solid black;
        border-radius: 20px;
    }

    .card:hover{
        background-color: aqua;
        cursor: pointer;
    }


    </style>
</head>
<body>

<main>   
        <h2>Utenti</h2>
        <div class="container">
            <?php
                foreach ($users as $value) { ?>
                    <div class="card">
                        <p>Nome: <?php echo $value -> getname() ?></p>
                        <p>Cognome: <?php echo $value -> getlastname() ?></p>
                        <p>Nickname: <?php echo $value -> getnickname() ?></p>
                        <p>Età: <?php echo $value -> getage() ?></p>
                        <p>Genere: <?php echo $value -> getgender() ?></p>
                    </div>
            <?php } ?>
        </div>
        <h2>Moderatori</h2>
        <div class="container">
            <?php
                foreach ($moderators as $value) { ?>
                    <div class="card">
                        <p>Nome: <?php echo $value -> getname() ?></p>
                        <p>Cognome: <?php echo $value -> getlastname() ?></p>
                        <p>Nickname: <?php echo $value -> getnickname() ?></p>
                        <p>Età: <?php echo $value -> getage() ?></p>
                        <p>Genere: <?php echo $value -> getgender() ?></p>
                    </div>
            <?php } ?>
        </div>
    </main>

</body>
</html>