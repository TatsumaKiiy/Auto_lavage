const form = document.getElementById("devisForm");
const output = document.getElementById("devisOutput");

form.addEventListener("submit", function(event) {
  event.preventDefault();
  const nom = form.elements["nom"].value;
  const prénom = form.elements["prénom"].value;
  const email = form.elements["email"].value;
  const telephone = form.elements["telephone"].value;
  const description = form.elements["description"].value;
  const prestation = form.elements["prestation"].value;
  let prix_presta = null;
  switch (prestation){
    case 'Prestation 1':
      prix_presta = 30;
      break;
    case 'Prestation 2':
      prix_presta = 50;
      break;
    case 'Prestation 3':
      prix_presta = 100;
      break;
    case 'Prestation 4':
      prix_presta = 90;
      break;
    case 'Prestation 5':
      prix_presta = 70;
      break;
    case 'Prestation 6':
      prix_presta = 30;
      break;
  }

  let quantite = form.elements["quantite"].value;
  let coutTotal = quantite * prix_presta;
  let TVA = coutTotal* 0.2;
  let TTC = coutTotal+TVA;



  const outputHTML = `
    <h2>Votre devis:</h2>
    <p>Nom: ${nom}</p>
    <p>Prénom: ${prénom}</p>
    <p>Email: ${email}</p>
    <p>Téléphone: ${telephone}</p>
    <p>Description du travail: <BR>${description}</p>

    <table>
      <tr>
        <th>Description</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>Total</th>
      </tr>
      <tr>
        <td>${prestation}</td>
        <td> ${prix_presta} €</td>
        <td> ${quantite}</td>
        <td> ${coutTotal} €</td>
      </tr>
      <tr>
        <td colspan="3">TOTAL</td>
        <td>${coutTotal} €</td>
      </tr>
      <tr>
        <td colspan="3">TVA</td>
        <td> ${TVA} €</td>
      </tr>
      <tr>
        <td colspan="3">Total TTC</td>
        <td> ${TTC} €</td>
      </tr>
    </table>

  `;

  output.innerHTML = outputHTML;

  
});
