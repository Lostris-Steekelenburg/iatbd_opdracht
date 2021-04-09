<article class="informatieGridcard a-popup">
    <figure class="informatieGridcard_figure">
        <img class="informatieGridcard_image_huisdier" src="{{$huisdier->image}}" alt="{{$huisdier->huisdiernaam}}">
    </figure>
    <section class="informatieGridcard_text">
        <p class="informatieGridcard_p">{{$huisdier -> huisdierInformatie}}</p>
        <p class="informatieGridcard_p">Uurtarief: €{{$huisdier -> uurtarief}}</p>
        <p class="informatieGridcard_p">Startdatum oppassen: {{$huisdier -> oppasDatum}}</p>
        <p class="informatieGridcard_p">Duur van het oppassen: {{$huisdier -> duurOppas}}</p>
    </section>
    <section class="informatieGridcard_btnSection">
        <a href="/huisdier" class="informatieGridcard_button">Terug naar overzicht</a>
        <a href="/oppassen" class="informatieGridcard_button">Ik wil oppassen</a>
    </section>
</article>

