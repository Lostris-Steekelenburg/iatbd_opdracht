<article class="create-form__article__oppas a-popup">
<form class="create-form__form" action="/oppassen" method="POST">
    @csrf
    <section class="create-form__section">
    <label class="create-form__label" for="name">Naam: </label>
    <input class="create-form__input" name="name" id="name" type="text">
    </section>

    <button class="create-form__button" type="submit">Verzenden</button>
</form>
</article>
    

