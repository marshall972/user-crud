<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="display-4 text-center">Faire un don</h1>
        <div class="text-center">
            <h2>
                <?php echo $user->prenom; ?> <?php echo $user->nom; ?>
            </h2>
            <div>
                <?php echo $user->email; ?>
            </div>
            <div class="m-3">
                <a href="/user-crud/router.php/liste" class="btn btn-secondary" target="_blank">Retour</a>
                <a href="https://www.paypal.com/paypalme/galaxylinq/10" class="btn btn-primary" target="_blank">Lui faire un don</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>