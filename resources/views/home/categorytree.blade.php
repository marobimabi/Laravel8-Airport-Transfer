@foreach($children as $subcategory)
    <ul>
        @if(count($sabcategory->$children))
            <li>{{$subcategory->title}}</li>
            <ul>
                @include('home.categorytree',['$children'=>$subcategory->$children])
            </ul>
            <hr>
            @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>


@endforeach
