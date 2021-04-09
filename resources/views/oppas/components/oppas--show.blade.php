<article class="informatieGridcard a-popup">
    <figure class="informatieGridcard_figure">   
        <img class="informatieGridcard_image" src="{{$oppas->image}}" alt="{{$oppas->naam_oppas}}">
    </figure>
    <section class="informatieGridcard_text">
        <p class="informatieGridcard_p">Naam: {{$oppas -> naam_oppas}} {{$oppas -> last_name}}</p>
        <p class="informatieGridcard_p">Email: {{$oppas -> email}}</p>
        <p class="informatieGridcard_p">Reviews: {{$oppas -> review}}</p>
    </section>
    <section class="informatieGridcard_btnSection">
        <a href="/" class="informatieGridcard_button">Terug naar overzicht</a>
        <a href="/delete/oppas/{id}" class="informatieGridcard_button">Verwijderen</a>
    </section>
</article>