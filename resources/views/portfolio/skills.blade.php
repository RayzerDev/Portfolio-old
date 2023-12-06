<x-layout>
    <div id="container">
        @if(!empty($categories))
                @foreach($categories as $categorie)
        <div class=baniere>
            <h2>{{$categorie}}</h2>
            @if(!empty($competences[$categorie]))
                <div id="cards">
                    @foreach($competences[$categorie] as $competence)
                        <div id="card">
                            <img src="{{"http://" . $hostImage . "/storage/" . $competence["image"]}}">
                            <p>{{$competence["nom"]}}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
                 @endforeach
        @endif
    </div>
</x-layout>
