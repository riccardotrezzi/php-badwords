<?php 
    $phrase = 'Ahhh, cavolo mi è caduto il latte';
    var_dump(strlen($phrase));

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Badwords</title>

        <!--Bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <p class="fs-3">
            Ahhh, <?php echo $_POST['badWords'];?> mi è caduto il latte!
        </p>
    </body>
</html>