<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
    <style>
        body {
            margin: 0;
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
    </style>
</head>
<body class="main-container">
    <header>
        <nav>
            <ul>
                <li><a href="#">Mon profil</a></li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <form action="#">
        <label for="labelPrenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="labelNom">Nom :</label><br>
        <input type="text" id="nom" name="nom"><br>
        <label for="labelUtilisateur">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="labelEmail">Adresse mail :</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="labelMdp">Mot de passe :</label><br>
        <input type="password" id="mdp" name="mdp"><br>
        <input type="submit" id="change-mdp" value="Changer mot de passe">
    </form>
</body>
</html>
