@extends('default')



@section('content')

<section class="profile">
<section class="profile__header">


<a class="profile__loguit" href="/dashboard">Klik hier om uit te loggen</a>  
</section>


<section class="profile__name">
    <p class="profile__intro">Welkom {{$naam}}, hieronder kan je een overzicht zien van jouw producten die je uitgeleend hebt</p>
</section>
<ul class="u-grid-12 u-grid-gap-2">
@foreach($producten as $product)
        @include('profiel.components.productCard--index')
@endforeach

</ul>

<table id="customers">
<tr>
    <th>Gericht aan:</th>
    <th>Review</th>
    <th>Gepost door:</th>
  </tr>
@foreach($reviews as $review)
<tr>
    <th>{{$review->User}}</th>
    <th>{{$review->Inhoud}}</th>
    <th>{{$review->Poster}}</th>
  </tr>
@endforeach
</section>

@endsection

