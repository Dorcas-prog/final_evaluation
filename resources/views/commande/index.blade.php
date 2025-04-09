@extends('welcome')

@section('contenu')

<div class="container mt-5">
    <h2 class="mb-4">Liste des Commandes</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Produit</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commandes as $commande)
            <tr>
                <td>{{ $commande->nom }}</td>
                <td>{{ $commande->produit }}</td>
                <td>{{ $commande->email }}</td>
                <td>{{ $commande->contact }}</td>
                <td>
                    <a href="{{ route('commande.edit', $commande) }}" class="btn btn-sm btn-primary">Modifier</a>

                    <form action="{{ route('commande.destroy', $commande) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
