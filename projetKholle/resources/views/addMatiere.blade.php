<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une matière</title>
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


        form {
            border: 1px solid #ddd;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            width: 500px;
            height: 250px;
            margin: 0 auto;
            margin-top: 150px;
            display: grid;
            grid-template-columns: 1.1fr 1fr; /* Deux colonnes égales */
            column-gap: 30px; /* Espacement entre les éléments */
        }

        form input[type="text"] {
            padding: 5px;
            height: 10px;
        }

        form input[type="submit"] {
            width: auto;
            margin-top: 50px;
            margin-left: 50px;
            padding: 8px 20px;
            background-color: #ccc;
            color: #fff;
            border: none;
            cursor: pointer;
            height: 30px;
        }

		.middle{
            display: flex;
            justify-content: center;
		}

        .center{
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
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
    <form method="post">
        @csrf
        <div class="center">
        <label for="nomMatiere">Matière :</label>
        <input type="text" id="nomMatiere" name="nomMatiere"><br>
        <input type="submit" id="addMatiere" value="Ajouter cette matière">
        </div>
    </form>
</body>
</html>
