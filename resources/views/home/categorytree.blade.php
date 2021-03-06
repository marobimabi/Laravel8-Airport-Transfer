
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
@foreach($children as $subcategory)
        @if(!count($subcategory->children))
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}" class="nav-link">{{$subcategory->title}}</a></li>
        @else
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$subcategory->title}}</a>
                @include('home.category-tree', ['children' => $subcategory->children])
            </li>
        @endif
@endforeach
</ul>
