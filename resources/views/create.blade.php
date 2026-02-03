<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer un fiche</title>
</head>
<body>
    <h1>Creer un Nouvel Hotel</h1>

    <form action="{{ route('hotel.create') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <fieldset>
            <legend>Informations:</legend>

            <label for="nom">Nom de l'Hotel </label>
            <input type="text" id="nom" name="nom" required>

            <label for="adress">Adresse</label>
            <textarea id="description" name="description" rows="5"></textarea>

            <label for="rating">Rating</label>
            <select id="rating" name="rating" required>
                <option value="">-- Selectionner --</option>
                <option value="1">1 Etoile</option>
                <option value="2">2 Etoiles</option>
                <option value="3">3 Etoiles</option>
                <option value="4">4 Etoiles</option>
                <option value="5">5 Etoiles</option>
            </select>

        </fieldset>


        <fieldset>
            <legend>Adresse</legend>

            <label for="adresse">Adresse Complete *</label>
            <input type="text" id="adresse" name="adresse" required>

        </fieldset>





        <fieldset>
            <legend>Capacite</legend>

            <label for="nombre_chambres">Nombre de Chambres :</label>
            <input type="number" id="nombre_chambres" name="nombre_chambres" min="1" required>


        </fieldset>



        <fieldset>
            <legend>Prix</legend>

            <label for="prix_min">Prix Minimum (MAD) </label>
            <input type="number" id="prix_min" name="prix_min" min="0" step="0.01" required>


        </fieldset>

        <fieldset>
            <legend>Images</legend>

            <label for="image_principale">Image Principale </label>
            <input type="file" id="image_principale" name="image_principale" accept="image/*" required>

            <label for="images_galerie">Galerie d'Images </label>
            <input type="file" id="images_galerie" name="images_galerie[]" accept="image/*" multiple>
        </fieldset>


        <fieldset>
            <legend>Statut</legend>

            <label>
                <input type="radio" name="statut" value="actif" checked>
                Actif
            </label>

            <label>
                <input type="radio" name="statut" value="inactif">
                Inactif
            </label>


        </fieldset>


        <div>
            <button type="submit">Creer l'Hotel</button>
            <button type="reset">Reinitialiser</button>
            <a href="{{ route('hotel.destroy') }}">
                @method('DELETE')<button type="button">Annuler</button>
            </a>
        </div>

    </form>
</body>
</html>
