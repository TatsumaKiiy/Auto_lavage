

<form action="search" method="get">
  
  <label for="marque">Marque:</label>
  <select id="prix" name="prix">
    <option value="">Toyota</option>
    <option value="1">Nissan</option>
    <option value="2">Audi</option>
    <option value="3">BMW</option>
    <option value="4">Mercedes</option>
  </select>
<!-- recherche par modele

  <label for="modele">Modèle :</label>
  <input type="text" id="modele" name="q">

  -->
  <label for="prix">Prix:</label>
  <select id="prix" name="prix">
    <option value="">Tous les prix</option>
    <option value="1">€0 - €10000</option>
    <option value="2">€10000 - €50000</option>
    <option value="3">€50000 - €100000</option>
    <option value="4">€100000+</option>
  </select>

<!-- Barre de JAUGE


  <label for="price-range">Plage de prix:</label>
  <input type="range" id="price-range" name="price-range" min="0" max="1000" step="10">


  -->
  <button type="submit">Rechercher</button>

</form>

















<style>
    form {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #ddd;
}

label {
  font-weight: bold;
  margin-right: 10px;
}

select, input[type="text"] {
  padding: 5px;
  margin-right: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 14px;
  color: #333;
}

select[name="prix"] {
  width: 150px;
}

input[type="text"][name="q"] {
  width: 200px;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>