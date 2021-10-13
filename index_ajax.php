<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>php-ajax-dischi</title>
</head>
<body>
    <div id="root" class="container">
        <header>
            <div id="top_bar">
                <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-icon-marilyn-scott-0.png"/>
            </div>
        </header>
        <main>
            <div id="main_cont">
                <div id="cards_cont">               
                   <div v-for="(card, index) in cards" :key="index" class="card">
                            <div class="img_cont">
                                <img :src="card.poster">
                            </div>
                            <div class="txt_cont">
                                <h1>{{card.title}}</h1>
                                <p>{{card.author}}</p>
                                <p>{{card.year}}</p>
                            </div>
                        </div>               
                </div>
            </div>
        </main>
    </div>
    <script src="js/main.js"></script>
</body>
</html>