
<style>
        /* Styles pour la section de produits */
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .product {
            width: 300px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 100%;
            height: auto;
            cursor: pointer; /* Ajoute un curseur pointer pour indiquer que l'image est cliquable */
        }

        .product h3 {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .product p {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .product button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .product button:hover {
            background-color: #555;
        }

        /* Styles pour le pied de page (footer) */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 0.9rem;
        }
</style>

<body>
  
    <section class="products">
        <h2>Nos Produits</h2>
        <div class="product">
            <img src="produit1.jpg" alt="Produit 1" onclick="addToCart('Produit 1', 19.99);">
            <h3>Produit 1</h3>
            <p>Description du produit 1.</p>
            <p>Prix : 19,99 €</p>
            <button onclick="addToCart('Produit 1', 19.99);">Ajouter au panier</button>
        </div>
        <div class="product">
            <img src="produit2.jpg" alt="Produit 2" onclick="addToCart('Produit 2', 29.99);">
            <h3>Produit 2</h3>
            <p>Description du produit 2.</p>
            <p>Prix : 29,99 €</p>
            <button onclick="addToCart('Produit 2', 29.99);">Ajouter au panier</button>
        </div>
        <div class="product">
            <img src="produit3.jpg" alt="Produit 3" onclick="addToCart('Produit 3', 39.99);">
            <h3>Produit 3</h3>
            <p>Description du produit 3.</p>
            <p>Prix : 39,99 €</p>
            <button onclick="addToCart('Produit 3', 39.99);">Ajouter au panier</button>
        </div>
        <!-- Ajoutez plus de produits ici -->
    </section>

    <footer>
        <p>&copy; 2023 Votre Marque - Tous droits réservés</p>
    </footer>

    <script>
        function addToCart(productName, productPrice) {
            // Vous pouvez implémenter ici la logique pour ajouter le produit au panier
            // Par exemple, utiliser JavaScript pour stocker les produits dans une variable panier
            // ou envoyer les données au serveur.
            console.log(`Ajout de ${productName} au panier pour ${productPrice} €`);
        }
    </script>
</body>
</html>
