<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="display-4 text-center">Inscrivez un mendiant !</h1>

        <?php
        if ($messageErreur !== null) 
        {
        ?>

            <div class="alert alert-danger" role="alert">
                <?php echo $messageErreur; ?>
            </div>

        <?php
        }
        ?>

        <form method="POST" action="/user-crud/router.php/inscription" enctype="multipart/form-data" class="p-5">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="user-lastname" class="form-control">
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="user-firstname" class="form-control">
            </div>
            <div class="form-group">
                <label>Image de profil (dans la rue)</label>
                <input type="file" name="user-photo-file" class="form-control-file">
            </div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="user-role">
                    <option value="vendeur">Role vendeur</option>
                    <option value="acheteur">Role acheteur</option>
                </select>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="user-email" class="form-control">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="user-password" class="form-control">
            </div>
            <button name="btn-valider" type="submit" class="btn btn-primary">S'inscrire</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>