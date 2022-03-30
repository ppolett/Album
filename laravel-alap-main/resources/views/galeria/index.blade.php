@extends("layouts.main")

@section("title", "Galéria")
@section("content")
    @foreach($categories as $category)
    <h1>{{$category['name']}}</h1>
        <p>
            @foreach($images[$category['id']] as $image)
                <img src="{{$image}}">
            @endforeach
        </p>
@endsection