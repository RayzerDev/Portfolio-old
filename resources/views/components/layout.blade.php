<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="shortcut icon" href="https://portfolio.rayzerdev.fr/images/logo/logo_icone.png">

    <link rel="stylesheet" href="{{asset("css/portfolio.css")}}"/>
    <title>{{$titre ?? "Portfolio"}}</title>
</head>
<body class="{{ session('darkMode') ? 'dark' : '' }}">
<nav>
    <div id="logo-container">
        <a href="{{route('portfolio')}}"><img id="logo" src="{{session('darkMode') ? asset("images/logo/logoDark.png") : asset("images/logo/logoWhite.png")}}" alt="Logo"></a>
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
                    <img src="{{asset("images/logo/github.svg")}}" alt="github">
            </a></li>
            <li><a href="https://www.linkedin.com/in/louiskrmk/">
                <img src="{{asset("images/logo/linkedin.svg")}}" alt="linkedin">
            </a></li>
            <li>
                <form id="darkModeForm" action="{{ route('darkMode.toggle') }}" method="POST">
                    @csrf
                    <button type="submit" id="darkModeToggle" style="border: none; background: none; cursor: pointer;">
                        <img src="{{ session('darkMode') ? asset('images/icons/light-mode.svg') : asset('images/icons/dark-mode.svg') }}" alt="mode">
                    </button>
                </form></li>
        </ul>
    </div>
</nav>
<button onclick="scrollToTop()" id="scrollBtn" title="Go to top">
    <img src="{{asset("images/icons/up.svg")}}" alt="buttonScroll">
</button>
{{$slot}}
</body>
</html>
<script>
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        var scrollButton = document.getElementById("scrollBtn");

        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollButton.style.display = "block";
        } else {
            scrollButton.style.display = "none";
        }
    }

    function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
