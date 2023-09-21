<html>
    <head>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    img {
        max-width: 100px;
        height: auto;
    }
</style>
    </head>
    <body>
      
    <table border="1" cellpadding="10" cellspacing="0">
  <thead>
    <tr>
      <th>Description</th>
      <th>Prix</th>
      <th>Image</th>
      <th>Marque</th>
      <th>Modèle</th>
      <th>Action</th>
      <th>Ajouter</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($lesVoitures as $uneVoiture) { ?>
      <tr>
        <td><?php echo $uneVoiture['description']; ?></td>
        <td><?php echo $uneVoiture['prix']; ?></td>
        <td><img src='<?php echo $uneVoiture['image']; ?>' alt="image"/></td>
        <td><?php echo $uneVoiture['marque']; ?></td>
        <td><?php echo $uneVoiture['modele']; ?></td>
        <td> 
          <a href="index.php?uc=administrer&action=supprimer" target="_blank" class="lien-image">
          <img src="C:\wamp\www\HTAuto\images\icon\pen.png" alt="image">
      
      <li><a href="index.php?uc=administrer&action=modifier">modifier</a></li>
        <li><a href="index.php?uc=administrer&action=supprimer"> Supprimer</a></li>
        <td><li><a href="index.php?uc=administrer&action=ajouter">ajouter</a></li>
        

      </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

    </body>
</html>