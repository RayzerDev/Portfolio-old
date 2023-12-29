<x-layout>
    <div id="container">
        @if(!empty($categories))
            @foreach($categories as $categorie)
            <div class=baniere>
                @if(!empty($projets))
                <h2>{{$categorie}}</h2>
                <div id="projects">
        @foreach($projets[$categorie] as $projet)
                    <div id="project">
                        <img src="{{"https://" . $hostImage . "/storage/" . $projet["image"]}}" alt="projet"/>
                        <div id="text">
                            <h3>{{$projet["nom"]}}</h3>
                            <p>{{$projet["description"]}}</p>
                            <p><strong>Technos : </strong>{{$projet["techs"]}}</p>
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
                @endif
            @endforeach
        </div>
        @endif
    </div>
</x-layout>
