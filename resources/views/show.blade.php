




<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Voir une Entretien
  </div>

<h3>Enretien Details</h3>
<table style="border:0px;">
    <tr>

    <td>

        <p><b class="lbl">ID :</b>{{ $entretien->id }}</p>
        <p><b class="lbl">Nom :</b>{{ $entretien->nom }}</p>
        <p><b class="lbl">Prenom :</b>{{ $entretien->prenom }}</p>
        <p><b class="lbl">Email :</b>{{ $entretien->email }}</p>
        <p><b class="lbl">Telephone :</b>{{ $entretien->telephone }}</p>
        <p><b class="lbl">Adresse :</b>{{ $entretien->addresse }}</p>
        <p><b class="lbl">Domaine :</b>{{ $entretien->domaine }}</p>
        <p><b class="lbl">Pourquoi_ce_choix :</b>{{ $entretien->pourquoi_ce_choix}}</p>
        <p><b class="lbl">Participants :</b>{{ $entretien->participants}}</p>
        <p><b class="lbl">Presentation_du_Candidat :</b>{{ $entretien->presentation_du_Candidat }}</p>
        <p><b class="lbl">Connaissez_vous_defarsci :</b>{{ $entretien->connaissez_vous_defarsci }}</p>
        <p><b class="lbl">Comment_voyez_vous_defarsci :</b>{{ $entretien->comment_voyez_vous_defarsci }}</p>
        <p><b class="lbl">Qu_entendez_de_defarsci :</b>{{ $entretien->qu_entendez_de_defarsci }}</p>
        <p><b class="lbl">Atouts :</b>{{ $entretien->atouts }}</p>
        <p><b class="lbl">Faiblesses :</b>{{ $entretien->faiblesses}}</p>
        <p><b class="lbl">Maladie_ou_allergie :</b>{{ $entretien->maladie_ou_allergie }}</p>
        <p><b class="lbl">Objectifs_dans_2ans :</b>{{ $entretien->objectifs_dans_2ans}}</p>
        <p><b class="lbl">Mois_de_formation:</b>{{ $entretien->mois_de_formation}}</p>
        <p><b class="lbl">Demarrage :</b>{{ $entretien->demarrage }}</p>
        <p><b class="lbl">Modalite_paiement :</b>{{ $entretien->modalite_paiement }}</p>
        <p><b class="lbl">Number_en_cas_d_urgence:</b>{{ $entretien->number_en_cas_d_urgence}}</p>
        <p><b class="lbl">Informations_supplementaires :</b>{{ $entretien->informations_supplementaires}}</p>

    </td>



</tr>

</table>




