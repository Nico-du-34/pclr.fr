@extends('layout')

@section('content')

<div data-te-datatable-init>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Disponibilité</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($autos as $auto)
            <tr>
                <td>{{ $auto->name }}</td>
                <td>{{ $auto->type }}</td>
                <td>{{ $auto->categorie }}</td>
                <td>{{ $auto->prix }}</td>
                <td>{{ $auto->disponibilite }}</td>
                <td><img src="{{ $auto->image_url }}" alt="{{ $auto->name }}" style="max-width: 100px;"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection