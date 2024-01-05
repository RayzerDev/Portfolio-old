<x-layout>
    <div id="container">
        <div class=baniere id="a-propos">
            <h2>Présentation</h2>
            <p>Je suis actuellement en 2ème année de mon BUT Informatique.
                J'ai eu la chance de pouvoir toucher aux ordinateurs très jeune,
                ce qui m'a permis de grandir avec l'informatique.
                La création de la matière Numérique et Sciences Informatiques
                m'a permis de conforter mes ambitions profesionelles,
                et d'affiner mon choix sur le métier de développeur informatique.
                Je recherche pour le semestre 4,
                une entreprise où je pourrais y faire mon alternance dans le développement informatique.
            </p>
        </div>
        @if(!empty($experiences))
        <div class=baniere id="xp-pro">
            <h2>Expériences profesionelles</h2>
            <div id="content">
                @foreach($experiences as $experience)
                    <div id="row-content">
                        <div id="head">
                            <h3>{{$experience["nom"]}}</h3>
                            <p class="type">{{$experience["type"]}}</p>
                        </div>
                        <div id="foot">
                            <div class="info" id="nom">
                                <img  src="{{asset("images/icons/building.svg")}}" alt="nom">
                                <p>{{$experience["entreprise"]}}</p>
                            </div>
                            <div class="info" id="ville">
                                <img  src="{{asset("images/icons/location.svg")}}" alt="ville">
                                <p>{{$experience["ville"]}}</p>
                            </div>
                            <div class="info" id="date">
                                <img  src="{{asset("images/icons/calendar.svg")}}" alt="date">
                                <p>{{$experience["date"]}}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
        @if(!empty($diplomes))
        <div class=baniere id="ecole">
            <h2>Diplômes</h2>
            <div id="content">
                @foreach($diplomes as $diplome)
                <div id="row-content">
                    <div id="head">
                        <h3>{{$diplome["nom"]}}</h3>
                        <p class="type">{{$diplome["type"]}}</p>
                    </div>
                    <div id="foot">
                        <div class="info" id="nom">
                            <img  src="{{asset("images/icons/graduation.svg")}}" alt="nom">
                            <p>{{$diplome["ecole"]}}</p>
                        </div>
                        <div class="info" id="ville">
                            <img  src="{{asset("images/icons/location.svg")}}" alt="ville">
                            <p>{{$diplome["ville"]}}</p>
                        </div>
                        <div class="info" id="date">
                            <img  src="{{asset("images/icons/calendar.svg")}}" alt="date">
                            <p>{{$diplome["date"]}}</p>
                        </div>
                    </div>
                    <hr>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        <div class=baniere id="a-propos">
            <h2>Passions</h2>
            <p>Concernant le sport, je pratique du Jiu-Jitsu. J'ai déjà réalisé 2 compétitions régionales.
                Je m'entraîne également à la salle de sport. J'aime jouer au foot avec mes amis, et supporter le RC Lens !</p>
            <p>Je suis également guitariste depuis toujours.
                C'est les Red Hot Chili Peppers qui m'ont inspiré, notamment John Frusciante. </p>
            <p>Je joue pendant mes heures perdues à l'ordinateur,
                et quand me vient une idée je développe comme ce portfolio.</p>
        </div>
    </div>
</x-layout>
