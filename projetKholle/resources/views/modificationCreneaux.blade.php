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
        }

        form input[type="text"] {
            padding: 5px;
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


        .gauche{
            grid-column: 1;
        }

        .droite{
            grid-column: 2;
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
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
            <div class="middle">
				<li><a href="#">Créer un nouveau créneau</a></li>
				<li><a href="#">Modifier un créneau</a></li>
			</div>
                <li><a href="#">Mon profil</a></li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
			

        </nav>
    </header>
    <form>
        <div class="gauche">
            <table class="input-table">
                <tr>
                    <th><label for="heureuChoisie">Heure :</label></th>
                    <td><input type="text" id="heureuChoisie" ></td>
                </tr>
                <tr>
                    <th><label for="classeChoisie">Classe :</label></th>
                    <td><input type="text" id="classeChoisie" ></td>
                </tr>
                <tr>
                    <th><label for="dateChoisie">Date :</label></th>
                    <td><input type="text" id="dateChoisie" ></td>
                </tr>
                <tr>
                    <th><label for="matiereChoisie">Matière :</label></th>
                    <td><input type="text" id="matiereChoisie" ></td>
                </tr>
            </table>
            <label>Liste des créneaux : </label>
        </div>
        <div class="droite">              
            <label for="description">Description du créneau :</label><br><br>
            <table class="input-table">
                <tr>
                    <th><label for="nomKholleur">Nom du Khôlleur :</label></th>
                    <td><input type="text" id="nomKholleur" ></td>
                </tr>
                <tr>
                    <th><label for="salleCreneau">Salle :</label></th>
                    <td><input type="text" id="salleCreneau" ></td>
                </tr>
                <tr>
                    <th><label for="dateCreneau">Date :</label></th>
                    <td><input type="text" id="dateCreneau" ></td>
                </tr>
                <tr>
                    <th><label for="heureCreneau">Heure :</label></th>
                    <td><input type="text" id="heureCreneau" ></td>
                </tr>
                <tr>
                    <th><label for="dureeCreneau">Durée :</label></th>
                    <td><input type="text" id="dureeCreneau" ></td>
                </tr>
            </table>
            <input type="submit" id="modifierCreneaux" value="Modifier le créneau">
        </div>


    </form>
</body>
</html>
