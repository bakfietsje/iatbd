@extends('default')
@section('content')


       
        

<ul class="u-grid-12 u-grid-gap-2">
    @foreach($producten as $product)
        @include('profiel.components.productCard--index')
     
        
    @endforeach
</ul>


@endsection

