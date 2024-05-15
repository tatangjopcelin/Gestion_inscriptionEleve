<html>
    <head>
        <title>
        </title>
    </head>
    <body bgcolor="green">
<center>
    @foreach ($eleve as $eleve)
    <form action="{{ route('eleves.update', $eleve->id) }}"  method="POST">
        @csrf
        @method('PUT')
        <table border="30">
            <tr><td><center>
        <label for="name">NOM :</label>
        <input type="text" name="nom" value="{{ $eleve->nom}}" required>
        <label for="prenom">PRENOM :</label>
        <input type="text" name="prenom" value="{{ $eleve->prenom }}" required>
        <label for="email">EMAIL :</label>
        <input type="text" name="email" value="{{ $eleve->email }}" required>
        <label for="classe">classe :</label>
        <input type="text" name="classe" value="{{ $eleve->classe }}" required>
        <label for="sexe">sexe :</label>
        <input type="text" name="sexe" value="{{ $eleve->sexe }}" required>
        <label for="specialite">specialite :</label>
        <input type="text" name="specialite" value="{{ $eleve->specialite }}" required>

        <input type="submit" value="valider"><===================><input type="reset"value="annuler">
    </td></tr>

    </table>
    </form>
    @endforeach


</center>








    </body>
</html>
