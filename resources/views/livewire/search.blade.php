<div>
    <input wire:model="search" name="search"  type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search" list="mylist">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($dataList as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
