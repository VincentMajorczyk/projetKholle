<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    padding: 50px;
    box-sizing: border-box;
}

h2 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
}

form {
    border: 1px solid #ddd;
    padding: 30px;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    width: 800px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #333;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    box-sizing: border-box;
}

input[type="submit"] {
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
<body>


<form action="login" method="post">
    <h2>Se connecter</h2>
    <label for="username">Nom d'utilisateur :</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Mot de passe :</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Se connecter">
</form>

</body>
</html>