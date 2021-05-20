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
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
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
                 <?php
                            foreach ($database as $album) { ?>
                    <div class="box">      
                        <ul>
                            <li class="img-container">
                                <img src="<?php echo $album['poster']; ?>" alt="album-poster">
                            </li>
                            <li> 
                                <strong><?php echo $album['title']; ?></strong>
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
                        </ul>    
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>

</body>
</html>




