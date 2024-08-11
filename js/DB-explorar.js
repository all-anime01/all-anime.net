// Datos de ejemplo de anime DB
const animes = [
  {
    id: 1,
    name: "Naruto",
    category: "accion",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/8532171bec0d05bfe45769a330fbab82.jpe",
    link: "https://all-anime.net/Naruto-tv",
    description:
      "Un joven ninja con el sueño de convertirse en el líder de su aldea.",
    type: "Sub | Dob",
    seasons: 9,
    episodes: "Subiendo...",
  },
  {
    id: 2,
    name: "Naruto Shippuden",
    category: "accion",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/01ec367b44f0a568430a957e042639af.jpe",
    link: "#naruto",
    description:
      "La continuación de las aventuras de Naruto en su búsqueda por salvar a su amigo Sasuke.",
    type: "Sub | Dob",
    seasons: 17,
    episodes: "Subiendo...",
  },
  {
    id: 3,
    name: "One Piece",
    category: "aventura",
    image:
      "https://www.crunchyroll.com/imgsrv/display/thumbnail/480x720/catalog/crunchyroll/757bae5a21039bac6ebace5de9affcd8.jpe",
    link: "https://all-anime.net/ver/One-piece/tv",
    description:
      "Las aventuras de Monkey D. Luffy y su tripulación en busca del tesoro conocido como One Piece.",
    type: "Sub | Dob",
    seasons: 14,
    episodes: 1114,
  },
  {
    id: 4,
    name: "My Hero Academia",
    category: "accion",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/6e008ad5211c3998b8f3e4bc166821cd.jpg",
    link: "https://all-anime.net/ver/My-hero-academia/tv",
    description:
      "En un mundo donde la mayoría de la población tiene superpoderes, un joven sin poderes lucha por convertirse en un héroe.",
    type: "Sub | Dob",
    seasons: 7,
    episodes: 150,
  },
  {
    id: 5,
    name: "Death Note",
    category: "sobrenatural",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/697c8b5ff2f49a97348b5507c06e1183.jpg",
    link: "https://all-anime.net/ver/Death-note/tv",
    description:
      "Light Yagami es un estudiante brillante con mucho futuro que se aburre a más no poder. Pero todo cambia cuando encuentra la Death Note, un cuaderno que dejó caer un rebelde dios de la muerte.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 37,
  },
  {
    id: 6,
    name: "Platinum End",
    category: "sobrenatural",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/a003327d23ee474087f40d5efa8afa2d.jpe",
    link: "https://all-anime.net/ver/Platinum-end/tv",
    description:
      "Mirai Kakehashi perdió a sus padres en un accidente y lleva una vida miserable desde que tuvo que irse a vivir con los parientes que se encargaron de él. Habiendo perdido la esperanza en todo, decide saltar desde lo alto de un edificio el mismo día que se gradúa de secundaria. Es entonces cuando se encuentra con un ángel",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 24,
  },
  {
    id: 7,
    name: "Fullmetal Alchemist",
    category: "fantasia",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/0662921aa3b81ff85737ddeb56deefab.jpe",
    link: "https://all-anime.net/ver/Fullmetal-alchemist-brotherhood/tv",
    description:
      "Dos hermanos alquimistas buscan la Piedra Filosofal para recuperar sus cuerpos después de un experimento fallido.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: "Subiendo...",
  },
  {
    id: 8,
    name: "Tower of God",
    category: "fantasia",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/eca729e2c2ae8ab45631c3bd11b81653.jpg",
    link: "https://all-anime.net/ver/Tower-of-god/tv",
    description:
      "Un joven entra en una misteriosa torre en busca de una chica que lo abandonó.",
    type: "Sub | Dob",
    seasons: 2,
    episodes: 18,
  },
  {
    id: 9,
    name: "Fairy Tail 100 Years Quest",
    category: "fantasia",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/6c66ccc8929c10b5deb599c4d1a6d5e1.jpg",
    link: "https://all-anime.net/ver/Fairy-tail-100-years-quest/tv",
    description:
      "Natsu y sus amigos emprenden una misión que no ha sido completada en 100 años.",
    type: "Subtitulado",
    seasons: 1,
    episodes: 5,
  },
  {
    id: 10,
    name: "Kaiju No.8",
    category: "accion",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/format=auto,fit=contain,width=480,height=720,quality=85/catalog/crunchyroll/bb5785a9fe043b8331b7842068bfcb05.jpe",
    link: "https://all-anime.net/ver/Kaiju-No-8/tv",
    description:
      "En un mundo plagado de monstruos, un hombre obtiene la habilidad de transformarse en uno de ellos.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 12,
  },
  {
    id: 11,
    name: "Quality Assurance in Another World",
    category: "comedia",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/4e20adfbae580632399ac5e7196929e6.jpg",
    link: "https://all-anime.net/ver/Quality-Assurance-in-Another-World/tv",
    description:
      "Un ingeniero de control de calidad es transportado a un mundo de fantasía donde aplica sus habilidades.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 6,
  },
  {
    id: 12,
    name: "Wind Breaker",
    category: "accion",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/16d570ff136955438a3a5bfadbb66eb5.jpg",
    link: "https://all-anime.net/ver/Wind-Breaker/tv",
    description:
      "Haruka Sakura, un novato en la delincuente Preparatoria Furin, busca abrirse paso luchando. La escuela ahora tiene un grupo protector llamado Wind Breaker. Comienza su leyenda.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 13,
  },
  {
    id: 13,
    name: "Tokyo Revenger",
    category: "drama",
    image: "/image/Tokyo-Revengers/T3/p.jpg",
    link: "https://all-anime.net/ver/Tokyo-revengers/tv",
    description:
      "Un joven viaja en el tiempo para salvar a su novia y a sus amigos de un futuro trágico.",
    type: "Sub | Dob",
    seasons: 3,
    episodes: 50,
  },
  {
    id: 14,
    name: "Kimetsu no Yaiba",
    category: "accion",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/format=auto,fit=contain,width=480,height=720,quality=85/catalog/crunchyroll/765ee047befcfb677d169f5de4c82d5c.jpe",
    link: "https://all-anime.net/ver/Kimetsu-no-yaiba/tv",
    description:
      "Un joven se convierte en cazador de demonios para vengar a su familia y curar a su hermana.",
    type: "Sub | Dob",
    seasons: 4,
    episodes: 63,
  },
  {
    id: 15,
    name: "Ao Ashi",
    category: "deporte",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/f1540a6b98f7b986993e7d2019a62512.jpg",
    link: "https://all-anime.net/ver/Ao-ashi/tv",
    description:
      "Ashito Aoi, un talentoso estudiante de Ehime, es invitado por el entrenador Fukuda a probarse en un equipo juvenil en Tokio, iniciando su camino para revolucionar el fútbol en Japón.",
    type: "Subtitulado",
    seasons: 1,
    episodes: 24,
  },
  {
    id: 16,
    name: "Shingeki no Kyojin",
    category: "drama",
    image:
      "https://www.crunchyroll.com/imgsrv/display/thumbnail/480x720/catalog/crunchyroll/323c82257b2f6567fabbb7bd55bfa753.jpe",
    link: "https://all-anime.net/ver/Shingeki-no-kyojin/tv",
    description:
      "La humanidad se refugió en una ciudad amurallada para escapar de criaturas gigantes. Ahora, esa paz se ve amenazada y se descubrirá el origen de los Titanes.",
    type: "Sub | Dob",
    seasons: 4,
    episodes: 90,
  },
  {
    id: 17,
    name: "Captain Tsubasa",
    category: "deporte",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/format=auto,fit=contain,width=480,height=720,quality=85/catalog/crunchyroll/f18cc7982a918da38a3b8e47c4ab6295.jpe",
    link: "https://all-anime.net/ver/Captain-Tsubasa/tv",
    description:
      "Tsubasa Oozora, un niño de 11 años amante del fútbol, se traslada a Nankatsu para mejorar sus habilidades y es desafiado por el portero Genzo Wakabayashi. Ambos competirán para demostrar quién es el mejor jugador.",
    type: "Sub | Dob",
    seasons: 2,
    episodes: 91,
  },
  {
    id: 18,
    name: "Blue Exorcist",
    category: "accion",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/ff18ec2d3a400d17921ad9b3a03045ce.jpg",
    link: "https://all-anime.net/ver/Ao-no-exorcist/tv",
    description:
      "Assiah, el mundo humano, y Gehenna, el mundo demoníaco, rara vez se cruzan. Sin embargo, algunos humanos pueden exorcizar demonios: los exorcistas.",
    type: "Subtitulado",
    seasons: 3,
    episodes: 49,
  },
  {
    id: 19,
    name: "Avatar: La leyenda de Aang",
    category: "aventura",
    image:
      "https://wwwimage-intl.pplusstatic.com/thumbnails/photos/w370-q80/show_asset/37/84/44/show_asset_53bb5de4-aa5f-4f85-bed3-c098f143c13f.jpg",
    link: "https://all-anime.net/ver/Avatar-la-leyenda-de-Aang/tv",
    description:
      "Aang, el nuevo Avatar, y sus amigos emprenden un viaje épico para salvar al mundo de la Nación del Fuego, que busca conquistar las demás naciones.",
    type: "Sub | Dob",
    seasons: 3,
    episodes: 61,
  },
  {
    id: 20,
    name: "Tragones y Mazmorras",
    category: "comedia",
    image: "https://all-anime.net/image/Tragones-y-mazmorras/T1/p.webp",
    link: "https://all-anime.net/ver/Tragones-y-mazmorras/tv",
    description:
      "Mazmorras, tragones ¡y exquisitos guisos de monstruos! Nada se salva del apetito de estos aventureros cuando se adentran en un reino maldito para salvar a uno de los suyos.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 24,
  },
  {
    id: 21,
    name: "Undead Unluck",
    category: "accion",
    image:
      "https://cdn.jkdesu.com/assets/images/animes/image/undead-unluck.jpg",
    link: "https://all-anime.net/ver/Undead-unluck/tv",
    description:
      "Fuuko Izumo, con una habilidad que causa desgracias, intenta suicidarse tras leer el final de su manga favorito. Es salvada por Andy, un inmortal que también quiere morir. Juntos buscan paz mientras una organización siniestra los persigue.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 24,
  },
  {
    id: 22,
    name: "Jujutsu Kaisen",
    category: "accion",
    image:
      "https://www.crunchyroll.com/imgsrv/display/thumbnail/480x720/catalog/crunchyroll/ebcd65fa9fb83580062e7052fa6ee5a5.jpe",
    link: "https://all-anime.net/ver/Undead-unluck/tv",
    description:
      "Yuji Itadori se traga un dedo maldito para salvar a alguien de su clase y ahora Ryomen Sukuna, un poderoso hechicero malvado conocido como el Rey de las Maldiciones, vive en su alma.",
    type: "Sub | Dob",
    seasons: 2,
    episodes: 47,
  },
  {
    id: 23,
    name: "Ousama Ranking",
    category: "drama",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/1500ddfac4a1ffbc767603fcac1b9b2a.jpe",
    link: "https://all-anime.net/ver/Ousama-ranking/tv",
    description:
      "La historia se centra en Bojji, un débil y sordo príncipe que no puede sostener incluso una espada para niños. Como el primogénito, sostiene su enorme deseo de convertirse en el más poderoso rey del mundo. Bojji consigue su primer amigo, llamado Kage (sombra), literalmente una sombra en el suelo que de alguna manera puede entender a Bojji.",
    type: "Sub | Dob",
    seasons: 2,
    episodes: 33,
  },
  {
    id: 24,
    name: "Soul Eater",
    category: "accion",
    image:
      "https://www.crunchyroll.com/imgsrv/display/thumbnail/480x720/catalog/crunchyroll/1b083a97efcac96d6f3f6c3880321f93.jpe",
    link: "https://all-anime.net/ver/Soul-Eater/tv",
    description:
      "¡Luchando con ghouls y monstruos junto con sus compañeros de clase, Maka y Soul son la última línea de defensa del mundo contra la maldad!.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 51,
  },
  {
    id: 25,
    name: "Shaman King (2021)",
    category: "accion",
    image: "https://all-anime.net/image/Shaman-king-2021/ShK-Poster.jpg",
    link: "https://all-anime.net/Shaman-king(2021)-tv",
    description:
      "Una batalla está a punto de comenzar en Tokio: la Batalla de Chamanes, una competencia que se realiza cada quinientos años en donde los Chamanes (aquellos que pueden comandar espíritus) se confrontan entre sí. Sin embargo, resulta sorprendente también que Manta sea capaz de verlos.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 52,
  },
  {
    id: 26,
    name: "Shaman King: Flowers",
    category: "accion",
    image:
      "https://hanapop.com.co/wp-content/uploads/2023/10/POSTER-Shaman-King-Flowers-731x1024.jpg",
    link: "https://all-anime.net/ver/Shaman-king-flowers/tv",
    description:
      "La continuación de Shaman King, siguiendo las aventuras de la siguiente generación de chamanes.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 13,
  },
  {
    id: 27,
    name: "Bleach",
    category: "accion",
    image: "https://all-anime.net/image/Bleach/p.jpg",
    link: "https://all-anime.net/ver/Bleach/tv",
    description:
      "Kurosaki Ichigo es un estudiante de instituto de 15 años, que tiene una peculiaridad: es capaz de ver, oír y hablar con fantasmas.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: "Subiendo...",
  },
  {
    id: 28,
    name: "Bleach Thousand Year Blood War",
    category: "accion",
    image:
      "https://all-anime.net/image/Bleach-thousand-year-blood-war/P2/p.webp",
    link: "https://all-anime.net/ver/Bleach-sennen-kessen-hen/tv",
    description:
      "Finalmente el Seireitei, hogar de los Soul Reapers, es atacado por un grupo que se hace llamar Wandenreich la historia y la verdad que los Soul Reapers mantuvieron oculta durante mil largos años finalmente salen a la luz.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 26,
  },
  {
    id: 29,
    name: "Pluto",
    category: "accion",
    image:
      "https://images.ctfassets.net/4cd45et68cgf/4ESSpHx4iyHhdk6GEMhRjO/6b0f609919df286437ffa98c7e51a428/en-US_pluto_main_main_vertical_27x40_rgb_pre_1.jpg",
    link: "https://all-anime.net/ver/Pluto/tv",
    description:
      "Cuando los siete robots más avanzados del mundo y sus aliados humanos son asesinados uno por uno, el inspector Gesicht descubre que él también está en peligro.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 8,
  },
  {
    id: 30,
    name: "Black Clover",
    category: "accion",
    image:
      "https://www.crunchyroll.com/imgsrv/display/thumbnail/480x720/catalog/crunchyroll/e108ae17d8d0407417cac40eb52d849a.jpe",
    link: "https://all-anime.net/ver/Black-clover/tv",
    description:
      "En un mundo en el que la magia lo es todo, Asta y Yuno son dos niños que encuentran abandonados el mismo día en una iglesia. Pero para ello tendrán que ser seleccionados primero por una Orden de Caballeros Mágicos, ¡y Asta no tiene magia!.",
    type: "Sub | Dob",
    seasons: 1,
    episodes: 8,
  },
  {
    id: 31,
    name: "Ranma 1/2 (2024)",
    category: "comedia",
    image: "/image/Ranma-1-2-2024/T1/p.jpg",
    link: "https://all-anime.net/ver/Ranma-1-2-2024/tv",
    description:
      "Ranma Saotome es un chico que sufre una peculiar maldición al caer en unos estanques malditos durante un entrenamiento de artes marciales.",
    type: "Subtitulado",
    seasons: 1,
    episodes: 12,
  },
  {
    id: 32,
    name: "Dragon Ball Z",
    category: "comedia",
    image:
      "https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=480,height=720/catalog/crunchyroll/35e4ac6339f5fdcc164160a5755790cd.jpe",
    link: "https://all-anime.net/ver/Dragon-ball-z/tv",
    description:
      "Villanos terroríficamente malvados de los rincones más oscuros del espacio y el tiempo se enfrentan con la Tierra, y Goku, el guerrero más fuerte del planeta, es todo lo que se interpone entre la humanidad y la extinción. Acompañado en la batalla por los valientes Guerreros Z, Goku viaja a reinos lejanos y peligrosos en busca de los poderes mágicos de las siete Dragon Balls. . . ¡y de una buena pelea!",
    type: "Subtitulado",
    seasons: 3,
    episodes: 35,
  },
  // ... (resto de los animes)
];

const animeGrid = document.getElementById("animeGrid");
const searchInput = document.getElementById("searchInput");
const categoryFilter = document.getElementById("categoryFilter");
const menuToggle = document.querySelector(".menu-toggle");
const mainNav = document.querySelector(".main-nav");
const navSearchInput = document.getElementById("navSearchInput");

function renderAnimes(animesToRender) {
  animeGrid.innerHTML = "";
  animesToRender.forEach((anime) => {
    const animeCard = document.createElement("div");
    animeCard.className = "animeCard";
    animeCard.innerHTML = `
          <a href="${anime.link}" class="animeLink">
              <img src="${anime.image}" alt="${anime.name}">
              <div class="animeInfo">
                  <h3>${anime.name}</h3>
                  <div class="animeType">${anime.type}</div>
              </div>
              <div class="animeDescription">
                  <p><strong>Título:</strong> ${anime.name}</p>
                  <p><strong>Temporadas:</strong> ${anime.seasons}</p>
                  <p><strong>Episodios:</strong> ${anime.episodes}</p>
                  <p><strong>Descripción:</strong> ${anime.description}</p>
              </div>
          </a>
      `;
    animeGrid.appendChild(animeCard);
  });
}

function filterAnimes() {
  const searchTerm = searchInput.value.toLowerCase();
  const selectedCategory = categoryFilter.value;

  const filteredAnimes = animes.filter(
    (anime) =>
      anime.name.toLowerCase().includes(searchTerm) &&
      (selectedCategory === "" || anime.category === selectedCategory)
  );

  renderAnimes(filteredAnimes);
}

function navSearch() {
  const menuToggle = document.querySelector(".menu-toggle");
  const mainNav = document.querySelector(".main-nav");
  const searchTerm = navSearchInput.value.toLowerCase();
  const filteredAnimes = animes.filter((anime) =>
    anime.name.toLowerCase().includes(searchTerm)
  );
  renderAnimes(filteredAnimes);
}

searchInput.addEventListener("input", filterAnimes);
categoryFilter.addEventListener("change", filterAnimes);
navSearchInput.addEventListener("input", navSearch);

menuToggle.addEventListener("click", () => {
  mainNav.classList.toggle("show");
  // Cambia el texto del botón
  menuToggle.innerHTML = mainNav.classList.contains("show")
    ? "&#10005;"
    : "&#9776;";
});

// Cierra el menú si se hace clic fuera de él
document.addEventListener("click", (event) => {
  if (
    !event.target.closest(".header-container") &&
    mainNav.classList.contains("show")
  ) {
    mainNav.classList.remove("show");
    menuToggle.innerHTML = "&#9776;";
  }
});

renderAnimes(animes);
