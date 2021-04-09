<article class="productCard a-popup" data-uitleenbaar={{$product->uitleenbaar}}>
<form class="create-form__form" action="/product/{{$product->id}}" method="POST">
@csrf
        <figure class="productCard__figure">
            <img class="productCard__image" src="{{$product->image}}" alt="{{$product->name . ' ' . $product->kind}}">
        </figure>
        <section class="productCard__text">
            <p>{{$product->info}}</p>
            </section>
            <section class="productCard__text">
            <p>Dit product is eigendom van: {{$product->owner}}</p>
        </section>
        <section class="productCard__btnSection">
        
            <button class="create-form__button " type="submit">Product lenen</button>
        
            <a class="productCard_back_to_home" href="/product">Terug naar overzicht</a>
        </section>
        </form>
</article>