@extends('layouts.layout')

@section('content')

<h1> Détails du produit #{{$products->id}} </h1>

<form action="/products/update" method="post">

    @csrf

    <input type="hidden" name="id" value="{{$products->id}}">

<p> <input type="text" name="nom_p" value="{{$products->nom}}" > </p> 

<p> <textarea name="description_p" cols="30" rows="10">{{$products->description}}</textarea></p> 

<p><button type="submit">Modifier le produit</button></p>

</form>

@endsection