<article class="create-form__article__oppas a-popup">
<form class="create-form__form" action="/oppas" method="POST">
    @csrf
    <section class="create-form__section">
    <label class="create-form__label" for="naam_oppas">Naam: </label>
    <input class="create-form__input" name="naam_oppas" id="naam_oppas" type="text">
    </section>

    <section class="create-form__section">
    <label class="create-form__label" for="last_name">Achternaam: </label>
    <input class="create-form__input" name="last_name" id="last_name" type="text">
    </section>

    <section class="create-form__section">
    <label class="create-form__label" for="email">Email: </label>
    <input class="create-form__input" name="email" id="email" type="text">
    </section>

 
    <section class="create-form__section">
    <label class="create-form__label" for="image">Afbeelding van je huis: </label>
    <select class="create-form__input" name="image" id="image">
        @foreach($oppas as $oppas)
        <option value="{{$oppas->image}}">{{$oppas->image}}</option>
        @endforeach
    </select>
    </section>

    <button class="create-form__button" type="submit">Aanmelden</button>
</form>
</article>
    

