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
        var_dump($users);

    $moderators = [
        new Moderator('Angela','Gallo','ange', 25, 'F',0,0,0,1),
        new User('Pia','Gianguzzi','piax', 30, 'F',0,0,0,1),
    ];
        var_dump($moderators);
?>