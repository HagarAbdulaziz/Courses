


            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{$dashes}}{{ $category->name_en}}</option>
            @if(count($category->children))
            @php $newDashes = '-'.$dashes   @endphp
            @include('dashboard.categories.subcategories', ['dashes'=>$newDashes,'categories'=>$category->children])
                <!-- Include subcategories.blade.php file and pass the current category to it -->
                {{-- @include('dashboard.categories.subcategories', ['category' => $category]) --}}
                @endif
            @endforeach






