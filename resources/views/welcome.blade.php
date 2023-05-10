<h1>welcome</h1>
<ul>
    @foreach ($categories as $category)
    <li>
        <a href="{{route('welcome.category',$category)}}">
        {{$category->name}}
    </a>
    </li>
    @endforeach

</ul>
<ul>
    @foreach ($products as $product)
    <li>
        <a href="{{route('welcome.detail',$product)}}">
            <button>detail</button>
        </a>
        {{$product->name}}
        {{$product->Prix}}

    </li>
    @endforeach

</ul>
