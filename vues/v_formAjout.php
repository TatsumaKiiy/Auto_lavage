
<html>
  <head>
    <meta charset="utf-8">
    <title>Voitures</title>
  </head>
  <body>
    <h1 class="aj">Ajouter une nouvelle voiture</h1>
    <form class="aj" action="index.php" method="post">
      <label class="aj" for="description">Description:</label>
      <input class="aj" type="text" name="description" id="description" required>
      <br>
      <label class="aj" for="prix">Prix:</label>
      <input class="aj" type="number" name="prix" id="prix" required>
      <br>
      <label class="aj" for="image">Image URL:</label>
      <input class="aj" type="url" name="image" id="image" required>
      <br>
      <label class="aj" for="marque">Marque:</label>
      <input class="aj" type="text" name="marque" id="marque" required>
      <br>
      <label class="aj" for="modele">Modèle:</label>
      <input class="aj" type="text" name="modele" id="modele" required>
      <br>
      <input class="aj" type="submit" name="submit" value="Ajouter">
    </form>

 
  </body>
</html>

<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
  $nouvelleVoiture = array(
    'description' => $_POST['description'],
    'prix' => $_POST['prix'],
    'image' => $_POST['image'],
    'marque' => $_POST['marque'],
    'modele' => $_POST['modele'],
  );

  // Ajouter la nouvelle voiture à la liste des voitures existantes
  $lesVoitures[] = $nouvelleVoiture;
}

// Générer le tableau HTML en utilisant les données de $lesVoitures

?>
