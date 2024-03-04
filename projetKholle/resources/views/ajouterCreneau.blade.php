<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créneaux</title>
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
            width: 1000px;
            height: 500px;
            margin: 0 auto;
            margin-top: 150px;
            display: grid;
            grid-template-columns: 1.1fr 1fr; /* Deux colonnes égales */
            column-gap: 30px; /* Espacement entre les éléments */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        form input[type="submit"] {
            width: 425px;
            margin-bottom: 40px;
            margin: 0 auto;
            padding: 8px 20px;
            background-color: #ccc;
            color: #fff;
            border: none;
            cursor: pointer;
            
        }

        form input[type="text"] {
            width: 300px;
            height: 20px;
            margin-top: 10px;
            margin: 0 auto; 
        }

        form input[type="number"]{
            width: 300px;
            margin-top: 10px;
            margin: 0 auto;
        }


        .input-table label{
            font-weight: normal;

        }
        .input-table{
            border-collapse: separate;
            border-spacing: 0 20px;
            margin-bottom: 50px;
        }

        tr.1{
            margin-bottom: 50px;
        }
		.middle{
            display: flex;
            justify-content: center;
		
		}
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
            <div class="middle">
				<li><a href="#">Créer un nouveau créneau</a></li>
				<li><a href="/modificationCreneaux">Modifier un créneau</a></li>
			</div>
                <li><a href="/profil">Mon profil</a></li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
			

        </nav>
    </header>
    <form>
            <table class="input-table">
                <tr class="1">
                    <th><label for="nomKholeur">Nom du Kholleur :</label></th>
                    <td><input type="text" id="nomKholeur" ></td>
                </tr>
                <tr>
                    <th><label for="salle">Salle :</label></th>
                    <td><input type="text" id="salle" ></td>
                </tr>
                <tr>
                    <th><label for="date">Date :</label></th>
                    <td><input type="text" id="date" ></td>
                </tr>
                <tr>
                    <th><label for="heure">Heure :</label></th>
                    <td><input type="text" id="heure" ></td>
                </tr>
                <tr>
                    <th><label for="duree">Durée :</label></th>
                    <td><input type="number" id="duree" ></td>
                </tr>
            </table>
        <input type="submit" id="ajouterCreneau" value="Ajouter ce créneaux">
    </form>
</body>
</html>
