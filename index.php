<?php
    $badWords = 'cavolo';
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

        <div class="container my-5">
            <div>
                <form class="my-3" action="./result.php" method="POST">
                    
                    <div>
                        <input class="w-50 fs-3 p-2" name="badWords" type="text" value="<?php echo $badWords;?>">
                    </div>
                    
                    <button type="submit">
                        Invia
                    </button>
                </form>
            </div>
            <div>
                <a href="./result.php">
                    Guarda il risultato censurato!
                </a>
            </div> 
        </div>
        
    </body>
</html>