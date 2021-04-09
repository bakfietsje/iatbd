@extends('default')

@section('content')

<article class="create-form a-popup">
<form class="create-form__form" action="/product" method="POST">
    @csrf

    <section class="create-form__section">
    <label for="name">Naam</label>
    <input class="create-form__input" name="name" id="name" type="text">
    </section>
    
    <section class="create-form__section">
    <label for="kind">Soort</label>
    <select class="create-form__input" name="kind" id="kind">
        @foreach($kind_of_product as $kind)
        <option value={{$kind->kind}}>{{$kind->kind}}</option>
        @endforeach
    </select>
    </section>
    
   
    <section class="create-form__section">
        <label for="description">Beschrijving</label>
        <textarea class="create-form__input create-form__input--big" name="description" id="description" type="text-area"></textarea>
    </section>

    <section class="create-form__section">
    <label for="image">Afbeelding</label>
    <select class="create-form__input" name="image" id="image">
        @foreach($images as $image)
        <option value={{$image->image}}>{{$image->image}}</option>
        @endforeach
    </select>
    </section>
    

    <section class="create-form__section">
    <label for="info">Informatie</label>
    <textarea class="create-form__input create-form__input--big" name="info" id="info" type="text-area"></textarea>
    </section>

    <section class="create-form__section">
    <label for="datum">Uiterlijke datum dat product moet teruggeven worden:</label>
        <input type="date" name="datum" id="datum">
    </section>

    <section class="create-form__section">
    <button class="create-form__button " type="submit">Product aanmaken</button>
    </section>
</form>
</article>
@endsection