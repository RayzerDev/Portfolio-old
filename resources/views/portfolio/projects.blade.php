<x-layout>
    <div id="container">
        @if(!empty($categories))
            @foreach($categories as $categorie)
            <div class=baniere>
                @if(!empty($projetsScolaire))
                <h2>$categorie</h2>
                <div id="projects">
        @foreach($projetsScolaire[$categorie] as $projet)
                    <div id="project">
                        <img src={{$projet["image"]}}>
                        <div id="text">
                            <h3>{{$projet["name"]}}</h3>
                            <p>{{$projet["description"]}}</p>
                            <p><strong>Technos :</strong>{{$projet["techs"]}}</p>
                            <div id="links">
                                @if(isset($projet["previewLink"]))
                                    <div id="link">
                                        <img src="{{asset("images/icons/link.png")}}" alt="">
                                        <a href="{{$projet["previewLink"]}}">Visualiser</a>
                                    </div>
                                @endif
                                @if(isset($projet["githubLink"]))
                                    <div id="link">
                                        <img src="{{asset("images/logo/github.svg")}}" alt="">
                                        <a href="{{$projet["githubLink"]}}">Code source</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
        @endforeach
            </div>
                    @endforeach
                @endif
        </div>
        @endif
    </div>
</x-layout>
