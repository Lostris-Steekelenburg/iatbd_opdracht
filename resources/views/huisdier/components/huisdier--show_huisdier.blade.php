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
        <a href="/oppasreacties" class="informatieGridcard_button">Oppas reacties</a>
    </section>
</article>

