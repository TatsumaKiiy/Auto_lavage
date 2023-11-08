  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="devis.css" rel="stylesheet">
</head>
<body>
	<form id="devisForm">
  <label for="nom">Nom:</label>
  <input type="text" id="nom" name="nom"><br>

  <label for="prénom">Prénom:</label>
  <input type="text" id="prénom" name="prénom"><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>

  <label for="telephone">Téléphone:</label>
  <input type="tel" id="telephone" name="telephone"><br>

  <label for="description">Description du travail:</label>
  <textarea id="description" name="description"></textarea><br>

  <label for="pet-select">Sélectionnez le produit</label>

<select name="prestation" id="prestation">
    <option value="Prestation 1" prix="30">Prestation 1</option>
    <option value="Prestation 2" prix="30">Prestation 2</option>
    <option value="Prestation 3" prix="30">Prestation 3</option>
    <option value="Prestation 4" prix="30">Prestation 4</option>
    <option value="Prestation 5" prix="30">Prestation 5</option>
    <option value="Prestation 6" prix="30">Prestation 6</option>
</select> <br>

  <label for="quantite">Quantité:</label>
  <input type="number" id="quantite" name="quantite"><br>

  <button type="submit">Obtenir un devis</button>
</form>

<div id="devisOutput"></div>


</body>
<script type="text/javascript" src="util/devis.js"> 
</script>
</html>