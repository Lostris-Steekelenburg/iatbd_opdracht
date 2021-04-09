<article class="informatieGridcard a-popup">
<form class="create-form__form" action="/delete/oppas" method="POST">
    @csrf
    <section class="create-form__section">
    <label for="naam_oppas">Naam: </label>
    <input class="create-form__input" name="naam_oppas" id="naam_oppas" type="text">
    </section>

    <button class="create-form__button" type="submit">Verwijder</button>

</form>
</article>