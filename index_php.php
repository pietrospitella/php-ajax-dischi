<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-ajax-dischi (PHP)</title>
</head>
<body>
    <header>
        <div id="top_bar">
            <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-icon-marilyn-scott-0.png"/>
        </div>
    </header>
    <main>
        <div id="main_cont">
            <div id="cards_cont">               
                <?php 

                include __DIR__.'/partials/database.php';

                foreach ($db as $key => $card) {
                    echo
                    '<div class="card">
                        <div class="img_cont">
                            <img src="'.$card['poster'].'">
                        </div>
                        <div class="txt_cont">
                            <h1>'.$card['title'].'</h1>
                            <p>'.$card['author'].'</p>
                            <p>'.$card['year'].'</p>
                        </div>
                    </div>
                    ';    
                }
                ?>                
            </div>
        </div>
    </main>
</body>
</html>