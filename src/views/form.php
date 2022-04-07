<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle recette</title>
</head>
<body>

    <h1>Nouvelle recette</h1>

    <form method="post">
        <p>
            <label for="title">Titre : </label>
            <input type="text" name="title" id="title">
        </p>

        <p>
            <label for="description">Description : </label>
            <textarea name="description" id="description"></textarea>
        </p>

        <p>
            <input type="submit" value="Créer">
        </p>
    </form>
    
</body>
</html>