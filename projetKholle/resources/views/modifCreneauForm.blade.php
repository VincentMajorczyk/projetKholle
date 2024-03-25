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
            font-weight: bold
        }

        form {
            border: 1px solid #ddd;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            width: 800px;
            margin: 0 auto;
            margin-top: 150px;
            
        }

        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="submit"]{
            background-color: #ccc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            justify-content: center;
        }
        .middle{
            display: flex;
            justify-content: center;
		}

    </style>
</head>
<body class="main-container">
    <header>
        <nav>
            <ul>
                <div class="middle">
                    <li><a href="/addSalle">Ajouter une salle</a></li>
                    <li><a href="/addMatiere">Ajouter une matière</a></li>
				    <li><a href="/listeCreneauxEtudiant">Voir la liste de créneaux</a></li>
				    <li><a href="/mesCreneauxEtudiant">Voir mes créneaux</a></li>
                    <li><a href="adminSearchUser">Modifier un utilisateur</a></li>
			    </div>
                <li><a href="#">Mon profil</a></li>
                <li><a href="/logout">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <form action='{{route('updateCreneau')}}' method="post">
        @csrf
        @foreach ($creneau as $c)
        <label for="labelClasse">Classe :</label><br>
        <input type="hidden" id='id' name='id' value="{{ $c->id}}">
        <input type="text" id="classe" name="classe" value="{{ $classe }}"><br>
        <label for="labelDate">Date :</label><br>
        <input type="text" id="date" name="date" value="{{ $c->datecreneau }}"><br>
        <label for="labelHeure">Heure :</label><br>
        <input type="text" id="heure" name="heure" value="{{ $c->heurecreneau }}"><br>
        <label for="labelSalle">Salle :</label><br>
        <input type="text" id="salle" name="salle" value="{{ $salle }}"><br>
        <label for="labelDuree">Durée :</label><br>
        <input type="text" id="duree" name="duree" value="{{ $c->duree }}"><br>
        <label for="labelMatiere">Matière :</label><br>
        <input type="text" id="matiere" name="matiere" value="{{ $matiere }}"><br>
        @endforeach
        <input type="submit" id="change-creneau" value="Confirmer le changement">
    </form>
</body>
</html>
