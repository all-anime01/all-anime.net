<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../../image/logo.ico">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../../css/anime-next2.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery.dataTables.min.js"></script>
</head>

<body>
    <header>
        <a href="https://www.all-anime.ga/inicio" class="logo">
            <h1><img src="../../image/all-anime-logo.png" id="log-img" alt="">All-<b>Anime</b></h1>
        </a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul>
                <li><a href="https://www.all-anime.ga/inicio">INICIO</a></li>
                <li><a href="https://www.all-anime.ga/directorioanime">DIRECTORIO ANIME</a></li>
                <li><a href="https://www.all-anime.ga/peliculas">PELÍCULAS</a></li>

                <div class="search">
                    <div class="icon"></div>
                    <div class="input">
                        <input type="text" class="search-table" placeholder="Buscar..." id="mysearch">
                    </div>
                    <span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
                </div>
                <script>
                    const icon = document.querySelector('.icon');
                    const search = document.querySelector('.search');
                    icon.onclick = function() {
                        search.classList.toggle('active')
                    }
                </script>
                <div class="content-search">
                    <div class="content-table">
                        <table id="table">
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><a href="../../kimetsu-no-yaiba-tv.html">
                                            <figure>
                                                <img src="../../image/Kimetsu-no-Yaiba-Temporada-1/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Kimetsu no Yaiba</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Ao-Ashi-tv.html">
                                            <figure>
                                                <img src="../../image/Ao-Ashi/AoAshi-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Ao Ashi</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Shingeki-no-kyojin-tv.html">
                                            <figure>
                                                <img src="../../image/SNK season 1/SNK-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Shingeki no Kyojin</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Ousama-Ranking-tv.html">
                                            <figure>
                                                <img src="../../image/osamaranking_visual2.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Ousama Ranking</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Jujutsu-Kaisen-tv.html">
                                            <figure>
                                                <img src="../../image/Jujutsu-Kaisen/jujutsu-kaisen-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Jujutsu Kaisen</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Shaman-king(2021)-tv.html">
                                            <figure>
                                                <img src="../../image/Shaman-king-2021/ShK-Poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Shaman King (2021)</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Naruto-tv .html">
                                            <figure>
                                                <img src="../../image/naruto.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Naruto</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Naruto-Shippuden-tv.html">
                                            <figure>
                                                <img src="../../image/shippuden.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Naruto Shippuden</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Saint-Seiya-Lost-Canvas-tv.html">
                                            <figure>
                                                <img src="../../image/lostcanvas.webp" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Saint Seiya Lost Canvas</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Saint-Seiya-Lost-Canvas-tv.html">
                                            <figure>
                                                <img src="../../image/lostcanvas.webp" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Caballeros del Zodiaco El Lienzo Perdido</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Death-note-tv.html">
                                            <figure>
                                                <img src="../../image/deathnote.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Death Note</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="https://www.all-anime.ga/ver/One-piece/tv">
                                            <figure>
                                                <img src="../../image/One-Piece-cap/One-Piece-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">One Piece</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="https://www.all-anime.ga/ver/My-hero-academia/tv">
                                            <figure>
                                                <img src="../../image/Boku-no-hero-Academia/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Boku no Hero Academy</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.all-anime.ga/ver/Bleach/tv">
                                            <figure>
                                                <img src="../../image/Bleach/bleach-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Bleach</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="../../Bleach-Hell-Verse-movie.html">
                                            <figure>
                                                <img src="../../image/pBleachHellVerse.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Bleach: Hell verse</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Boku-no-Hero-Academy-WHM-movie.html">
                                            <figure>
                                                <img src="../../image/pBkheromission.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">My Hero Academia: World Heroes Mission</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Dragon-ball-Resureccion-F-movie.html">
                                            <figure>
                                                <img src="../../image/pDrgaon-Ball-Z-Resurrection-No-F-Movie.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Dragon Ball: Resurrección de Freezer</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Yu-gi-oh-Lazos-más-allá-del-tiempo-movie.html">
                                            <figure>
                                                <img src="../../image/pYugioh.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Yu-Gi-Oh!: Lazos más allá del Tiempo</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Yu-gi-oh-Lazos-más-allá-del-tiempo-movie.html">
                                            <figure>
                                                <img src="../../image/pYugioh.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Yugioh!: Lazos más allá del Tiempo</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../One-Piece-Estampida-movie.html">
                                            <figure>
                                                <img src="../../image/pOPstampede.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">One Piece: Stampede</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <td><a href="#">
                                        <figure>
                                            <img src="/image/pBorutotheMovie.jpg" id="image-min" alt="">
                                        </figure>
                                        <span class="title">Boruto: Naruto the Movie</span>
                                    </a>
                                    <span class="Type tvB">PELÍCULA</span>
                                </td>
                                </tr>
                                <td><a href="/Dragon-Ball-Super-Broly-movie.html">
                                        <figure>
                                            <img src="/image/pDragon-Ball-Super-Broly.jpeg" id="image-min" alt="">
                                        </figure>
                                        <span class="title">Dragon ball Super: Broly</span>
                                    </a>
                                    <span class="Type tvB">PELÍCULA</span>
                                </td>
                                </tr>
                                <td><a href="/Dragon-Ball-Super-Super-Hero-movie.html">
                                        <figure>
                                            <img src="/image/Dragon-ball-super-Super-Hero/poster.png" id="image-min" alt="">
                                        </figure>
                                        <span class="title">Dragon ball Super: Super Hero</span>
                                    </a>
                                    <span class="Type tvB">PELÍCULA</span>
                                </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Yu-gi-oh-El-lado-oscuro-de-las-dimensiones-movie.html">
                                            <figure>
                                                <img src="../../image/Yu-gi-oh-El-lado-oscuro-de-las-dimensiones/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Yu-gi-oh!: El lado oscuro de las dimensiones</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Pokémon-El-despertar-de-Mewtwo-movie.html">
                                            <figure>
                                                <img src="../../image/pPokemonGenesect.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Pokémon: Genesect y el despertar de una leyenda</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Digimon-Last-Evolution-Kizuna-movie.html">
                                            <figure>
                                                <img src="../../image/pDigimonLastevo.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Digimon: last Evolution</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Detective-conan-el-puño-de-zafiro-azul-movie.html">
                                            <figure>
                                                <img src="../../image/pdetective-conan-puno-zafiro-azul_3.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Detective Conan: El puño de Zafiro</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../One-Piece-Film-Gold-movie.html">
                                            <figure>
                                                <img src="../../image/pOne_Piece_Film_Gold.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">One piece: Film Gold</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../One-Piece-Film-Gold-movie.html">
                                            <figure>
                                                <img src="../../image/One-piece-Film-red/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">One piece: Film Red</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Kimetsu-no-yaiba-mugen-train-movie.html">
                                            <figure>
                                                <img src="../../image/Kimetsu-No-Yaiba-Mugen-Train-Pelicula/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Kimetsu no yaiba: mugen train</span>
                                        </a>
                                        <span class="Type tvB">PELÍCULA</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Orient-tv.html">
                                            <figure>
                                                <img src="../../image/Orient/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Orient</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Sabikui-bisco-tv.html">
                                            <figure>
                                                <img src="../../image/Sabikui-Bisco/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Sabikui Biscot</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../One-punch-man-tv.html">
                                            <figure>
                                                <img src="../../image/One-punch-man/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">One punch man</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Fullmetal-Alchemist-Brotherhood-tv.html">
                                            <figure>
                                                <img src="../../image/fullmetalalchemistB.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Fullmetal Alchemist Brotherhood</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Soul-eater-tv.html">
                                            <figure>
                                                <img src="../../image/Soul-eater/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Soul Eater</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Sword-art-online-tv.html">
                                            <figure>
                                                <img src="../../image/Sword-Art-online/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Sword art online</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Platinum-End-tv.html">
                                            <figure>
                                                <img src="../../image/Platinum-End/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Platium End</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Mushoku-Tensei-tv.html">
                                            <figure>
                                                <img src="../../image/Mushoku-Tensei/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Mushoku Tensei: Isekai Ittara Honki Dasu</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Fire-force-tv.html">
                                            <figure>
                                                <img src="../../image/Fire-force/poster.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Fire Force</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Hajime-no-ippo-tv.html">
                                            <figure>
                                                <img src="../../image/Hajime-no-ippo/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Hajime no Ippo</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Hellsing-tv.html">
                                            <figure>
                                                <img src="../../image/Hellsing/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Hellsing</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Record-of-ragnarok-tv.html">
                                            <figure>
                                                <img src="../../image/Record-of-ragnarok/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Record of ragnarok</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Edens Zero/EdensZero-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Eden Zero</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Kimetsu-no-Yaiba-Temporada2Arc-Ken/Kimetsu_no_Yaiba_Season_2-poster.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Kimetsu No Yaiba:Mugen Ressha-Hen Arc</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Kimetsu-no-yaiba-yuukaku-hen-Temporada2/kimetsu-season2-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Kimetsu No Yaiba:Yuukaku-Hen Arc</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Gantz/Gantz-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Ganz</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/SNK-season2/SnK-season2-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Shingeki No Kyojin Season 2</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/SNK-season3/Snk-season3-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Shingeki No Kyojin Season 3</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/SNK-season4/Snk-season4-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Shingeki No Kyojin Season 4</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Eyeshield 21/eyeshield-21-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Eyeshield 21</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Tokyo-Revengers/toyko-revenge-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Tokyo Revengers</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Yu-yu-Hakusho/yuyuhakusho-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Yu Yu Hakusho</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Mob-Psycho-temporada-1/mob-psycho-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Mob Psycho</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Assassination-Classroom/Assassination-Classroom-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Assassination Classroom</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Black-clover/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Black clover</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Spy-X-Family/spyXfamily-poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Spy x Family</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Hunter-x-Hunter/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Hunter x Hunter</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Pokemon/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Pokemon</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Dragon-Ball/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Dragon ball</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Dragon-ball-Super/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Dragon ball Super</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Fairy-tail/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Fairy Tail</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Toriko/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Toriko</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Dr.STONE/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Dr.Stone</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/JoJo's-Bizarre-Adventure/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">JoJo's Bizarre Adventure</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Haikyu/poster.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Haikyu</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Vinland-Saga/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Vinland Saga</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Radiant/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Radiant</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Captain-Tsubasa/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Captain Tsubasa</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Captain-Tsubasa/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Super campeones</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Dragon-ball-Z/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Dragon Ball Z</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/The-god-high-school/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">The God of the High School</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/The-promised-neverland/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">The Promised neverland</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Inuyasha/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Inuyasha</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Nanatsu-no-taizai/poster.jpeg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Nanatsu no Taizai</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/made-in-abyss/poster.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Made in Abyss</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/SNK-season-4-part2/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Shingeki no kyojin season 4 parte 2</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Mushoku-Tensei-Part-2/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">mushoku tensei: Isekai Ittara Honki Dasu Parte 2</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Fumetsu-no-Anata-e/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Fumetsu no Anate e</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.all-anime.ga/Bleach-sennen-kessen-hen-tv">
                                            <figure>
                                                <img src="../../image/Bleach-thousand-year-blood-war/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Bleach: Thousand Year Blood War</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/chainsaw-man/poster.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Chainsaw man</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.all-anime.ga/Mob-Psycho-100-III-tv">
                                            <figure>
                                                <img src="../../image/Mob-psycho-III/poster.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Mob Psycho: III</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.all-anime.ga/Blue-Lock-tv">
                                            <figure>
                                                <img src="../../image/Blue-lock/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Blue lock</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Boku-no-hero-academia-hero-league-baseball/poster.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Boku No Hero Academia: ONA</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.all-anime.ga/Chainsaw-man-tv">
                                            <figure>
                                                <img src="../../image/chainsaw-man/poster.png" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Chainsaw man</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../Boku-no-hero-academia-season-6-tv.html">
                                            <figure>
                                                <img src="../../image/Boku-no-hero-academia-season-6/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Boku No Hero Academia: Temporada 6</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="../../cyber-punk-edge-runners-tv.html">
                                            <figure>
                                                <img src="../../image/Cyber-Punk-EdgeRunners/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Cyberpunk: Edgerunners</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/86-Eighty-Six/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">86: Eighty-Six (2021)</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Katekyo-Hitman-Reborn!/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Katekyo Hitman Reborn!</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Inazuma-eleven/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Inazuma eleven</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Inazuma-eleven/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Super once</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Yu-gi-oh-sevens/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Yu-gi-oh!: Sevens</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">
                                            <figure>
                                                <img src="../../image/Yu-gi-oh-5Ds/poster.jpg" id="image-min" alt="">
                                            </figure>
                                            <span class="title">Yu-gi-oh!: 5Ds</span>
                                        </a>
                                        <span class="Type tv">ANIME</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </ul>
        </nav>

    </header>