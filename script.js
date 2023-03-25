window.onload = () => {
  document.querySelector('#calculer').addEventListener('click', (e) => {
    // Empêche l'envoi du formulaire
    e.preventDefault();

    const resultats = document.querySelector('#resultats');

    const niv = document.querySelector('#niv').value;
    const att = document.querySelector('#att').value;
    const pui = document.querySelector('#pui').value;
    const stab = document.querySelector('#stab').value;
    const bst_att = document.querySelector('#bst_att').value;
    const def = document.querySelector('#def').value;
    const eff = document.querySelector('#eff').value;
    const meteo = document.querySelector('#meteo').value;
    const bst_def = document.querySelector('#bst_def').value;
    var bru = 1;

    if (document.querySelector('#bru').checked === true) {
      bru = 0.5;
    }

    const PV_perdus_1 = Math.floor((((niv * 0.4 + 2) * (att * bst_att * bru) * pui) / ((def * bst_def) * 50) + 2) * stab * eff * meteo * 0.85);
    const PV_perdus_2 = Math.floor((((niv * 0.4 + 2) * (att * bst_att * bru) * pui) / ((def * bst_def) * 50) + 2) * stab * eff * meteo);

    resultats.innerHTML = `<p>Le pokémon perdra entre <strong>${PV_perdus_1}</strong> PV et <strong>${PV_perdus_2}</strong> PV</p>`;
  });
};