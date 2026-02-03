<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Hôtel</title>
</head>
<body>
    <h1>Modifier l'Hôtel : [Nom Hôtel]</h1>

    <form action="/hotels/1" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">

        <!-- Même structure que le formulaire de création, avec values pré-remplies -->

        <fieldset>
            <legend>Informations de Base</legend>

            <label for="nom">Nom de l'Hôtel *</label>
            <input type="text" id="nom" name="nom" value="Hôtel Atlantis" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5">Un magnifique hôtel en bord de mer...</textarea>

            <label for="categorie">Catégorie *</label>
            <select id="categorie" name="categorie" required>
                <option value="1">1 Étoile</option>
                <option value="2">2 Étoiles</option>
                <option value="3">3 Étoiles</option>
                <option value="4" selected>4 Étoiles</option>
                <option value="5">5 Étoiles</option>
            </select>
        </fieldset>



        <div>
            <button type="submit">Mettre a Jour</button>
            <a href="/hotels"><button type="button">Annuler</button></a>
        </div>

    </form>
</body>
</html>
