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
