@extends('default')
@section('content')

<article class="create-form a-popup">
<form class="create-form__form" action="/admin" method="POST">
    @csrf
      
    <section class="create-form__section">
    <label for="image">Producten</label>
    <select class="create-form__input" name="naam" id="naam">
        @foreach($producten as $product)
        <option value={{$product->name}}>{{$product->name}}</option>
        @endforeach
    </select>
    </section>

    <section class="create-form__section">
    <label for="image">Gebruikers</label>
    <select class="create-form__input" name="gebruiker" id="gebruiker">
        <option value="niemand">Verwijder niemand</option>
        @foreach($gebruikers as $gebruiker)
        <option value={{$gebruiker->name}}>{{$gebruiker->name}}</option>
        @endforeach
    </select>
    </section>

    <section class="create-form__section">
    <button class="create-form__button " type="submit">Verwijder</button>
    </section>
</form>
</article>
@endsection