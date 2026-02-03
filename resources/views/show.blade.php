<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Hôtel</title>
</head>
<body>
    <h1>Hotel Atlantis</h1>

    <a href="{{ route(hotel.index) }}"><button>← Retour a la liste</button></a>
    <a href="{{ route('hotel.update') }}"><button> Modifier</button></a>

    <section>
        <h2>Informations :</h2>
        <p><strong>rating:</strong> ⭐⭐⭐⭐ </p>

        <p><strong>Statut :</strong> Actif</p>

    </section>

    <section>
        <h2>Adresse</h2>

    </section>



    <section>
        <h2>Capacite</h2>
        <p><strong>Chambres :</strong> </p>

    </section>

    <section>
        <h2>Services</h2>

    </section>

    <section>
        <h2>Tarification</h2>
        <p><strong>Prix :</strong></p>
    </section>

    <section>
        <h2>Images</h2>
        <img src="/images/hotel1-main.jpg" alt="Image principale" width="400">
        <div>
            <img src="/images/hotles.jpg" alt="Galerie 1" width="150">
            <img src="/images/.jpg" alt="Galerie 2" width="150">
            <img src="/images/hotels.jpg" alt="Galerie 3" width="150">
        </div>
    </section>

    <form action="/hotels/1" method="POST" onsubmit="return confirm('Etes-vous sur de vouloir supprimer cet hotel ?')">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Supprimer l'Hotel</button>
    </form>
</body>
</html>
