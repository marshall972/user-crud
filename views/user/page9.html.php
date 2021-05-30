<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <div class="container">
    <h1 class="display-4 text-center">Liste des mendiants</h1>
    <div class="text-center m-5">
        <a href="/user-crud/router.php/inscription" class="btn btn-primary">Inscrire un mendiant</a> 
    </div>
        <table class="table table-striped w-75 mx-auto">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Image</th>
                <th>Role</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Actions</th>
            </tr>

            <?php
            foreach ($tableau as $element) {
            ?>

                <tr>
                    <td class="w-25">
                        <?php echo $element->nom ?>
                    </td>
                    <td>
                        <?php echo $element->prenom ?>
                        </td>
                    <td>
                        <img class="w-100" src="/user-crud<?php echo $element->image ?>" />
                    </td>
                    <td>
                        <?php echo $element->role ?>
                    </td>
                    <td>
                        <?php echo $element->email ?>
                    </td>
                    <td>
                        <?php echo $element->mot_de_passe ?>
                    </td>
                    <td>
                        <a href="/user-crud/router.php/details-utilisateur?id=<?php echo $element->id ?>" class="btn btn-primary">Détails</a> 
                        <a href="/user-crud/router.php/supprimer-utilisateur?id=<?php echo $element->id ?>" class="btn btn-danger">Supprimer</a>
                        <a href="/user-crud/router.php/modifier-utilisateur?id=<?php echo $element->id ?>" class="btn btn-warning">Modifier</a>
                    </td>
                </tr>

            <?php
            }
            ?>

        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>