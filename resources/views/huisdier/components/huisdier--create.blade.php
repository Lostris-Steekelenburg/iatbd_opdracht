<article class="create-form__article a-popup">
<form class="create-form__form" action="/huisdier" method="POST">
    @csrf
    <section class="create-form__section create-form__section__first">
    <label class="create-form__label" for="huisdiernaam">huisdiernaam: </label>
    <input class="create-form__input" name="huisdiernaam" id="huisdiernaam" type="text">
    </section>

    <section class="create-form__section">
    <label class="create-form__label" for="soort">Soort dier: </label>
    <input class="create-form__input" name="soort" id="soort" type="text">
    </section>

    <section class="create-form__section">
    <label class="create-form__label" for="huisdierInformatie">huisdier informatie: </label>
    <textarea class="create-form__input create-form__input--big" name="huisdierInformatie" id="huisdierInformatie"></textarea>
    </section>

    <section class="create-form__section">
    <label class="create-form__label" for="oppasDatum">Datum voor het oppassen: </label>
    <input class="create-form__input" name="oppasDatum" id="oppasDatum" type="text">
    </section>

    <section class="create-form__section">
    <label class="create-form__label" for="uurtarief">uurtarief: </label>
    <input class="create-form__input" name="uurtarief" id="uurtarief" type="text">
    </section>

    <section class="create-form__section">
    <label class="create-form__label" for="duurOppas">duur van het oppassen: </label>
    <input class="create-form__input" name="duurOppas" id="duurOppas" type="text">
    </section>

 
    <section class="create-form__section">
    <label class="create-form__label" for="image">Afbeelding: </label>
    <select class="create-form__input" name="image" id="image">
        @foreach($huisdier as $huisdier)
        <option value="{{$huisdier->image}}">{{$huisdier->image}}</option>
        @endforeach
    </select>
    </section>

    <button class="create-form__button" type="submit">Ter oppas aanbieden</button>
</form>
</article>
    

