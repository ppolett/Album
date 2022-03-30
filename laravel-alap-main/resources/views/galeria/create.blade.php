@extends("layouts.main")

@section("title","Galéria")
@section("content")
    <p>Új kép feltöltés</p>

    {!! Form::open(["route" => "galeria.store", "method" => "post", "enctype" => "multipart/form-date"]) !!}
    {!! Form::select("category", $categories) !!}
    {!! Form::file("image") !!}
    {!! Form::submit("Feltölt") !!}
    {!! Form::close() !!}

@endsection