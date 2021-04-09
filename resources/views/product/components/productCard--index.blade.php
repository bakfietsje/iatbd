<li  class="a-popup u-list-style-none GridCard" data-name={{$product->name}} data-kind-of-product={{$product->kind}}> 
    <a href="/product/{{$product->id}}">
        <article>
            <header class="GridCard__header u-flex-v-center" >
                <h2  class="GridCard__heading"> {{$product->kind}}</h2>
            </header>
            <figure class="GridCard__figure">
                <img class="GridCard__image" src="{{$product->image}}" alt="{{$product->name . ' ' . $product->kind}}">
            </figure>
            <section class="GridCard__textSection">
                <p class="GridCard__text">{{$product->description}}</p>
                <p class="GridCard__text">Leenbaar tot : {{$product->datum}}</p>
            </section>
            
               
          
            
                
            
        </article>
    </a>
</li>
