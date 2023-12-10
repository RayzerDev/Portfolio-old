<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{asset("images/logo/logo_icone.png")}}" />
    @vite(['resources/css/portfolio.css'])
    <title>{{$titre ?? "Portfolio"}}</title>
</head>
<body>
<nav>
    <div id="logo-container">
        <a href="{{route('portfolio')}}"><img id="logo" src="{{asset("images/logo/logoWhite.png")}}" alt="Logo"></a>
    </div>
    <div id="nav-links">
        <ul id="button">
            <li><a href="{{route('portfolio.about')}}">À propos</a></li>
            <li><a href="{{route('portfolio.skills')}}">Compétences</a></li>
            <li><a href="{{route('portfolio.projects')}}">Projets</a></li>
            <li><a href="{{route('portfolio.contact')}}">Contact</a></li>
        </ul>
        <ul id="network">
            <li><a href="https://www.github.com/RayzerDev">
                    <img  src="{{asset("images/logo/github.svg")}}" alt="github">
                </a></li>
            <li><a href="https://www.linkedin.com/in/louiskrmk/">
                    <img  src="{{asset("images/logo/linkedin.svg")}}" alt="linkedin">
                </a></li>
        </ul>
    </div>
</nav>
{{$slot}}
</body>
</html>
