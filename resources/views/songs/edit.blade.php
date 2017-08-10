@extends('layout.app')
@section('body')
{{$song->title}} <br>by
{{$song->artist}}
@endsection