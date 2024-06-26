<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un créneau</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
        }
        header {
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
        }


        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }   

        nav a {
            color: #fff;
            text-decoration: none;
        }

        nav a:hover {
            font-weight: bold;
        }       


        .containers{
            border: 1px solid #ddd;
            padding: 30px;
            grid-template-columns: 1.1fr 1fr; /* Deux colonnes égales */
            column-gap: 30px; /* Espacement entre les éléments */
            width: 1000px;
            height: 500px;
            margin-top: 100px;
            margin-left: 400px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            display: grid;
        }

        form input[type="text"] {
            padding: 5px;
        }
        
        form select {
            padding: 5px;
            padding-right: 50px;
        }


        form input[type="submit"] {
            width: auto;
            margin-top: 10px;
            padding: 8px 20px;
            background-color: #ccc;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    
        .l{
            grid-column: 1;
        }

        .r{
            grid-column: 2;
            margin-left: 40px;
        }


        .input-table label{
            font-weight: normal;
        }
        .input-table{
            border-collapse: separate;
            border-spacing: 0 20px;
        }
		.middle{
            display: flex;
            justify-content: center;
		
		}
        .container-creneaux {
            width: 300px; /* Largeur de votre petit espace */
            border: 1px solid #ccc; /* Bordure pour visualiser la zone */
            padding: 20px; /* Espacement intérieur */
            height: 230px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<header>
        <nav>
            <ul>
            <div class="middle">
                <li><a href="/addSalle">Ajouter une salle</a></li>
                <li><a href="/addMatiere">Ajouter une matière</a></li>
				<li><a href="/ajouterCreneau">Créer un nouveau créneau</a></li>
				<li><a href="/modificationCreneaux">Modifier un créneau</a></li>
                <li><a href="adminSearchUser">Modifier un utilisateur</a></li>
			</div>
                <li><a href="/profil">Mon profil</a></li>
                <li><a href="/logout">Déconnexion</a></li>
            </ul>
			

        </nav>
    </header>
    <div class="containers">
    <form class="l" method="post" action="{{route('regarde')}}">
        @csrf
        <div class="gauche">
            <table class="input-table">
                <tr>
                    <th><label for="classe">Classe :</label></th>
                    <td><select name="classe" id="classe">
                    @foreach($classes as $classe)
                    <option value='{{ $classe->id }}'>{{ $classe->nomclasse }}</option>
                    @endforeach
                    </select></td>
                </tr>
                <tr>
                    <th><label for="date">Date :</label></th>
                    <td><input name="date" placeholder="YYYY-MM-DD" type="text" id="date" ></td>
                </tr>
                <tr>
                    <th><label for="matiereChoisie">Matière :</label></th>
                    <td><select name="matiere" id="matiere">
                    @foreach($matieres as $matiere)
                    <option value='{{ $matiere->id }}'>{{ $matiere->nommatiere }}</option>
                    @endforeach
                    </select></td>
                </tr>
            </table>
            <input type="submit" id="findCrenaux" value="Rechercher"><br><br>
            <label>Liste des créneaux : </label>
            <div class="container-creneaux">
                <ul>
                @if($creneaux != null)
                @foreach($creneaux as $creneau)
                <li class="creneau-item" id="{{$creneau->id}}" data-id="{{$creneau->id}}" data-matiere="{{ \App\Models\Matiere::find($creneau->matiere)["nommatiere"]}}" data-salle="{{$creneau->sallecreneau}}" data-matiere="{{ \App\Models\Matiere::find($creneau->matiere)["nommatiere"]}}" data-date="{{$creneau->datecreneau}}" data-enseignant="{{ \App\Models\User::find($creneau->id_enseignant)["nom"]}}" data-heure="{{ $creneau->heurecreneau}}" data-duree="{{ $creneau->duree}}"> 
                {{$creneau->sallecreneau}}, {{ \App\Models\Matiere::find($creneau->matiere)["nommatiere"]}}, {{$creneau->datecreneau}}
                </li>
                @endforeach
                @endif
                </ul>
            </div>
        </div>
    </form>
    <form class="r" method="post" action="{{route('modifCreneau')}}">
    @csrf
        <div class="droite">              
            <label for="description">Description du créneau :</label><br><br>
            <table class="input-table">
                <tr>
                    <th><label for="nomKholleur">Nom du Khôlleur :</label></th>
                    <td><input name="nomKholleur" type="text" id="nomKholleur" readonly></td>
                    <td><input name="idCreneau" type="hidden" id="idCreneau" readonly></td>
                </tr>
                <tr>
                    <th><label for="matiereCreneau">Matière :</label></th>
                    <td><input name="matiereCreneau" type="text" id="matiereCreneau" readonly></td>
                </tr>
                <tr>
                    <th><label for="salleCreneau">Salle :</label></th>
                    <td><input name="salleCreneau" type="text" id="salleCreneau" readonly></td>
                </tr>
                <tr>
                    <th><label for="dateCreneau">Date :</label></th>
                    <td><input name="dateCreneau" type="text" id="dateCreneau" readonly></td>
                </tr>
                <tr>
                    <th><label for="heureCreneau">Heure :</label></th>
                    <td><input name="heureCreneau" type="text" id="heureCreneau" readonly></td>
                </tr>
                <tr>
                    <th><label for="dureeCreneau">Durée :</label></th>
                    <td><input name="dureeCreneau" type="text" id="dureeCreneau" readonly></td>
                </tr>
            </table>
            <input type="submit" id="modifierCreneaux" value="Modifier le créneau">
        </div>
    </form>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let creneauItems = document.querySelectorAll('.creneau-item');

        creneauItems.forEach(function(item) {
            item.addEventListener('click', function() {
                document.getElementById('idCreneau').value = this.getAttribute('data-id');
                document.getElementById('nomKholleur').value = this.getAttribute('data-enseignant');
                document.getElementById('matiereCreneau').value = this.getAttribute('data-matiere');
                document.getElementById('salleCreneau').value = this.getAttribute('data-salle');
                document.getElementById('dateCreneau').value = this.getAttribute('data-date');
                document.getElementById('heureCreneau').value = this.getAttribute('data-heure');
                document.getElementById('dureeCreneau').value = this.getAttribute('data-duree');
                // Vous pouvez ajouter d'autres données si nécessaire
            });
        });
    });
</script>
</html>
