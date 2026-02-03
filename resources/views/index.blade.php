<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes fiches</title>
</head>
<body>
    <h1>Mes Hotels</h1>

    <a href="/hotels/create"><button> Ajouter un Hotel</button></a>

    <table border="1">
        <thead>
            <tr>

                <th>Nom</th>
                <th>Adress</th>
                <th>Rating</th>
                <th>Chambres</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>Hotel A</td>
                <td>Casablanca</td>
                <td>⭐⭐⭐⭐</td>
                <td>120</td>
                <td>Actif</td>
                <td>
                    <a href="/hotels/1"><button>Voir</button></a>
                    <a href="/hotels/1/edit"><button>Modifier</button></a>
                    <form action="/hotels/1" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm(' sur ?')">Supprimer</button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
</body>
</html>
