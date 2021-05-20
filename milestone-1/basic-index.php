<?php
include __DIR__ . '/database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify-dischi-PHP-only</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   
    <div id="app">
         <!-- HEADER -->
         <header>
            <div class="container">
                <div class="logo">
                    <img src="./logo.png" alt="spotify-logo">
                </div>
            </div>
         </header>

        <!-- CONTENT -->
        <main class="content">
            <div class="container">
                <div class="box">
                    <ul>
                        <?php
                            foreach ($database as $album) { ?>
                        <li class="img-container">
                            <img src="<?php echo $album['poster']; ?>" alt="album-poster">
                        </li>
                        <li> 
                            <?php echo $album['title']; ?>
                        </li>
                        <li> 
                            <?php echo $album['author']; ?>
                        </li>
                        <li> 
                            <?php echo $album['year']; ?>
                        </li>
                        <li> 
                            <?php echo $album['genre']; ?>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </main>
    </div>

</body>
</html>




