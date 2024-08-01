<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Détails du produit</title>
</head>
<body>
@include('header')

<h1>Fiche du produit {{$id}}</h1>

<form action="panier.php" method="post" class="custom-thumbnail">
    <h3 class="mb-3">Nom du produit</h3>

    <input name="idProduct" type="hidden" value="" />
    <div class="row">
        <img src="{{ asset('images/dcshoes.jpg') }}" id="product-image" alt="Photo du produit">

        <div class="row">
            <p>
                <label for="quantity">Quantité : </label>
                <input type="number" id="quantity-thumbnail" name="quantity" min="0">
            </p>
            <p>NNN €</p>
        </div>
        <p><input type="submit" value="Ajouter au panier"></p>
    </div>

</form>


<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@include('footer')
</body>
</html>
