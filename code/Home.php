<?php require_once "header.html";?>
<main>
    <h1>Le Pote-Cast a ton Image</h1>
    <div class="fox">
        <img src="icones/fox.png" alt="prout">
    </div>
    <div class="titre">
        <div class="gauche"> 
            <p>Dernière Sorties</p>
        </div>
        <div class="container-wrapper">
            <div class="container">
                <iframe src="https://www.youtube.com/embed/jfzF7sxVJcU" allowfullscreen></iframe>
                <ul>
                    <li><p>Titre de la deuxième vidéo</p></li>
                    <li><button>visionner la vidéo</button></li>
                </ul>
            </div>
            <div class="containerr">
                <iframe src="https://www.youtube.com/embed/mm9Q0ery82o" allowfullscreen></iframe>
                <ul>
                    <li><p>Titre de la deuxième vidéo</p></li>
                    <li><button>visionner la vidéo</button></li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="container-wrapper-vertical">
    <div class="container-vertical" id="section1">
        <img src="img/photo1.jpg" alt="" width="250" height="400">
        <p>Ok</p>
    </div>
    <div class="container-vertical" id="section2">
        <img src="img/photo.jpg" alt="" width="250" height="400">
        <p>Ok</p>
    </div>
    <div class="container-vertical" id="section3">
        <img src="img/ugo.jpg" alt="" width="250" height="400">
        <p>Ok</p>
    </div>
    
    <div class="container-vertical" id="section4">
        <img src="img/prout.jpg" alt="" width="250" height="400">
        <p>Ok</p>
    </div>
    <div class="container-vertical" id="section5">
        <img src="img/retro-microphone-notebook-computer-live-webcast-air-concept.jpg" alt="" width="250" height="400">
        <p>Ok</p>
    </div>
    <div class="container-vertical" id="section6">
        <img src="img/caca.jpg" alt="" width="250" height="400">
        <p>Ok</p>
    </div>
    <div class="container-vertical" id="section7">
        <img src="img/retro-microphone-notebook-computer-live-webcast-air-concept.jpg" alt="" width="250" height="400">
        <p>Ok</p>
    </div>                   
    </div>
    
</div>

<button onclick="scrollToNext()">Suivant</button>


</main>
<script>
        let currentSection = 1; // Garde une trace de la section actuellement affichée

function scrollToNext() {
    const container = document.querySelector('.container-wrapper-vertical');
    const sections = document.querySelectorAll('.container-vertical');

    if (currentSection < sections.length) {
        currentSection++;
        container.scrollTo({
            left: sections[currentSection - 1].offsetLeft, // Défile jusqu'à la position du prochain container
            behavior: 'smooth' // Défilement fluide
        });
    } else {
        currentSection = 1; // Revenir au début lorsque tous les containers sont affichés
        container.scrollTo({
            left: 0, // Défile jusqu'au début
            behavior: 'smooth' // Défilement fluide
        });
    }
}

    </script>

<?php require_once "footer.html";?>