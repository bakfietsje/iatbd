@extends('default')

@section('content')

<article class="create-form a-popup">
<form class="create-form__form" action="/review" method="POST">
    @csrf
      
    <section class="create-form__section">
    <label for="image">Gebruiker</label>
    <select class="create-form__input" name="gebruiker" id="gebruiker">
        @foreach($gebruikers as $gebruiker)
        <option value={{$gebruiker->name}}>{{$gebruiker->name}}</option>
        @endforeach
    </select>
    </section>
    <section class="create-form__section">
        <label for="description">Review</label>
        <textarea class="create-form__input create-form__input--big" name="review" id="review" type="text-area"></textarea>
    </section>

   
    




    <section class="create-form__section">
    <button class="create-form__button " type="submit">Review achterlaten</button>
    </section>
</form>
</article>
@endsection