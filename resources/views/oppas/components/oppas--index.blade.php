<li class="a-popup u-list-style-none oppasGridCard">
    <article>
        <header class="oppasGridCard_header u-flex-v-center">
            <h2 class="oppasGridCard_heading">{{$oppas -> naam_oppas}}</h2>
        </header>
        <figure class="oppasGridCard_figure">
        <img class="oppasGridCard_image" src="{{$oppas->image}}" alt="{{$oppas->naam_oppas}}">
        </figure>
        <section class="oppasGridCard_btnSection">
            <a href="/oppas/{{$oppas -> id}}" class="oppasGridCard_button">Meer over {{$oppas -> naam_oppas}}</a>
        </section>
    </article>
</li>