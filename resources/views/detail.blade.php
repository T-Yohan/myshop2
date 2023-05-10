<h1>mes details</h1>

{{$product->name}}



<ul>
    <li>
        <a href="{{route('addToCart',$product)}}">
        @foreach ($products as $product)
        {{$product->name}}
        @endforeach
        </a>
    </li>
</ul>


<ul>
    <li>
        <a href="{{route('addToCart',$product)}}">
            Ajouter au panier
        </a>
    </li>
</ul>
