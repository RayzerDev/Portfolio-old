<x-layout>
    <div id="container">
        <div id="infos">
            <h2>Contactez-moi !</h2>
            <div id="mail">
                <h3>Mail: </h3><a href="mailto:louis.karamucki@outlook.fr">louis.karamucki@outlook.fr</a>
            </div>
            <a id="download" href="{{asset("storage/CV_Louis_KRMK.pdf")}}">
            <div id="download-button">
                <img src="{{asset("images/icons/download.svg")}}" alt="imgDown">
                <p>Retrouvez mon cv</p>
            </div>
            </a>
        </div>
    </div>
</x-layout>
