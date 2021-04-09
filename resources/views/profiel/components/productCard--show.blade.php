<article class="productCard a-popup">
<form class="create-form__form" action="/product/mijnProducten/{{$product->id}}" method="POST">
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
        
            <button class="create-form__button " type="submit">Product terug geven</button>
        
            <a class="productCard_back_to_home" href="/product">Back to home</a>
        </section>
        </form>
</article>