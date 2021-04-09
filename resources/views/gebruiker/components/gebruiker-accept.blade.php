<article class="create-form__article__review a-popup">
<h2 class="reacties_heading">Je hebt {{$oppas}} geaccepteerd als oppas</h2>
<p class="reacties_p">Wil je een review na laten?</p>
<form class="create-form__form" action="/review" method="POST">
    @csrf
    <section class="create-form__section">
    <label class="create-form__label" for="naam_oppas">Naam van de oppas: </label>
    <input class="create-form__input" name="naam_oppas" id="naam_oppas" type="text">
    </section>

    <section class="create-form__section">
    <label class="create-form__label" for="review">review: </label>
    <textarea class="create-form__input create-form__input--big" name="review" id="review"></textarea>
    </section>

    <button class="create-form__button" type="submit">Verzend</button>
</form>
</article>
    

