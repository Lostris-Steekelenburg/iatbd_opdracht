<article class="informatieGridcard a-popup">
<form class="create-form__form" action="/blokkeer" method="POST">
    @csrf
    <section class="create-form__section">
    <label for="name">Naam: </label>
    <input class="create-form__input" name="name" id="name" type="text">
    </section>

    <button class="create-form__button" type="submit">Blokkeer</button>

</form>

<form class="create-form__form" action="/deblokkeer" method="POST">
    @csrf
    <section class="create-form__section">
    <label for="name">Naam: </label>
    <input class="create-form__input" name="name" id="name" type="text">
    </section>

    <button class="create-form__button" type="submit">Deblokkeer</button>

</form>
</article>