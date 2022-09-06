@extends('layouts.layout')

@section('content')

    <h1 style="color: green">Liste des produits</h1>

    <h2>Créer un produit</h2>

    <form action="/products/store" method="post">

        @csrf

        <p> <input type="text" name="nom_p" placeholder="nom du produit" value="{{old('nom_p')}}" required> </p>

        @error('nom_p')
            <p style="color: red;font-style:italic">{{$message}}</p>
        @enderror

        <p>
            <textarea name="description_p" cols="30" rows="10" placeholder="description du produit" required>{{old('description_p')}}</textarea>
        </p>

        @error('description_p')
            <p style="color: red;font-style:italic">{{$message}}</p>
        @enderror

        <p><button type="submit">Ajouter le produit</button></p>

    </form>

    @if ($products->count() > 0)
        <table>
            <thead>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nom }}</td>
                        <td>{{ $product->description }}</td>
                        <td><a href="/showProduct/{{ $product->id }}">Modifier</a> <a href="/delete/{{ $product->id }}">Supprimer</a></td>
                               
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p style="font-size:20px"> Pas encore de produits </p>
    @endif

@endsection
