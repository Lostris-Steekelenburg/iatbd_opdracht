<li class="a-popup u-list-style-none huisdierGridCard" data-soort-huisdier={{$huisdier->soort}}>
    <article>
        <header class="huisdierGridCard_header u-flex-v-center">
            <h2 class="huisdierGridCard_heading">{{$huisdier -> huisdiernaam}}</h2>
        </header>
        <figure class="huisdierGridCard_figure">
        <img class="huisdierGridCard_image" src="{{$huisdier->image}}" alt="{{$huisdier->huisdiernaam}}">
        </figure>
        <section class="huisdierGridCard_btnSection">
            <a href="/huisdier/{{$huisdier -> id}}" class="huisdierGridCard_button">Meer over {{$huisdier -> huisdiernaam}}</a>
        </section>
    </article>
</li>