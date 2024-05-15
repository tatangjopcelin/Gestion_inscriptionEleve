<html>
    <head>
        <title>
        </title>
    </head>
    <body bgcolor="green">
<center>

<form action="{{ route('eleves.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <table border="30">
        <tr><td><center>
               <label for="photo_profil">photo_profil :</label>
            <input type="file" name="photo_profil" id="photo_profil"><br><br>

    <label for="name">NOM :</label>
    <input type="text" name="nom" id="nom">
    <label for="prenom">PRENOM :</label>
    <input type="text" name="prenom" id="prenom"><br><br>
    <label for="email">EMAIL :</label>
    <input type="text" name="email" id="email"><br><br>
    <label for="classe">classe :</label>
    <input type="text" name="classe" id="classe"><br><br>
    <label for="sexe">sexe :</label>
    <input type="text" name="sexe" id="sexe"><br><br>
    <label for="specialite">specialite :</label>
    <input type="text" name="specialite" id="specialite"><br><br>


    <input type="submit" value="valider"><===================><input type="reset"value="annuler">
</td></tr>

</table>
</form>

</center>








    </body>
</html>
