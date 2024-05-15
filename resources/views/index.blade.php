<html>
    <head>
        <title>index
        </title>
    </head>
    <center>
    <body >
    <table border="50" bgcolor="green">
     <thead>
         <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>classe</th>
            <th>sexe</th>
            <th>specialite</th>
            <th>mise a jour</th>
            <th>suppression</th>
         </tr>
      </thead>

       <tbody>
       <tr><a href="{{ route('eleves.create') }}" role="button"><h3>
        <input type="submit" value="ajouter un eleve"> <br></h3></a></tr>
       @foreach ($eleves as $eleve )
        <tr>
          <td>{{ $eleve->id }}</td>
          <td>{{ $eleve->nom }}</td>
          <td>{{ $eleve->prenom }}</td>
          <td>{{ $eleve->email }}</td>
          <td>{{ $eleve->classe }}</td>
          <td>{{ $eleve->sexe }}</td>
          <td>{{ $eleve->specialite }}</td>
          <td><a href="{{ route('eleves.edit', $eleve->id) }}" role="button"> <input type="submit" value="modifier"></a></td>
          <td>
            <form action="{{ route('eleves.destroy',$eleve->id) }}" method="post">
                @csrf
                @method('DELETE')
                 <button type="submit">Suprimer</button>
            </form>
          </td>

       </tr>
      @endforeach
    </tbody>
    </table>
    </body>



    </body>
</html>
