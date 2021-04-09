@extends('default')

@section('title')
{{"All Products"}}
@endsection

@section('content')
<form class="list__items" action="#">
    <label for="gereedschap">Gereedschap</label>  
    <input id="gereedschap" name="gereedschap" type="checkbox">


    <label for="elektronica">Elektronica</label>
    <input id="elektronica" name="elektronica" type="checkbox">

    <label for="meubilair">Meubilair</label>
    <input id="meubilair" name="Meubilair" type="checkbox">

    <label for="schoonmaakspullen">Schoonmaakspullen</label>
    <input id="schoonmaakspullen" name="schoonmaakspullen" type="checkbox">

    <label for="hardware">Hardware</label>
    <input id="hardware" name="hardware" type="checkbox">
    </form>
    <ul class="u-grid-12 u-grid-gap-2">
    @foreach($product as $product)
        @include('product.components.productCard--index')
     
        
    @endforeach
    
    
    </ul>  
    
@endsection

@section('zoekfunctie')
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek naar artikelen.." title="Voer iets in">

<ul id="myUL">
@foreach($namen as $naam)
    <li><a href="#">{{$naam->name}}</a></li>
@endforeach


</ul>
@endsection
   

