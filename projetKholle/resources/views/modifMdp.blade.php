<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer son mot de passe</title>
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
				    <li><a href="/listeCreneauxEtudiant">Voir la liste de créneaux</a></li>
				    <li><a href="/mesCreneauxEtudiant">Voir mes créneaux</a></li>
			    </div>
                <li><a href="/profil">Mon profil</a></li>
                <li><a href="/logout">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <form action="#" method="post">
        @csrf
        <label for="newpassword"></label>Nouveau mot de passe :<br>
        <input type="text" id="newpassword" name="newpassword"><br>
        <label for="newpasswordcheck"></label>Confirmer le mot de passe :<br>
        <input type="text" id="newpasswordcheck" name="newpasswordcheck"><br>
        <input type="submit" id="change-mdp" value="Confirmer">
    </form>
</body>
</html>
