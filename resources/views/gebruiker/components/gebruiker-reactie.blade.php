<article class="create-form__article__oppas a-popup">
<h2 class="reacties_heading">Hier zie je wie er allemaal op jou huisdier wilt passen</h2>
<p class="reacties_p">{{$oppas}}</p>
<form class="create-form__form" action="/oppasAccepteer" method="POST">
    @csrf
    <section class="create-form__section">
    <label class="create-form__label" for="name">Naam: </label>
    <input class="create-form__input" name="name" id="name" type="text">
    </section>

    <button class="create-form__button" type="submit">Accepteer</button>
</form>
<form class="create-form__form" action="/oppasWeiger" method="POST">
    @csrf
    <section class="create-form__section">
    <label class="create-form__label" for="name">Naam: </label>
    <input class="create-form__input" name="name" id="name" type="text">
    </section>

    <button class="create-form__button" type="submit">Weiger</button>
</form>
</article>
    

