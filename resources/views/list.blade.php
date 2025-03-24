<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <a href="{{ route('utilisateurs.create') }}">Ajouter un utilisateur</a>
    <ul>
        @foreach($lists as $utilisateur)
            <li>{{ $utilisateur->nom }} - {{ $utilisateur->email }} - {{ $utilisateur->age }} ans
                <a href="{{ route('utilisateurs.edit', $utilisateur->id) }}">Modifier</a>
                <form action="{{ route('utilisateurs.destroy', $utilisateur->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
