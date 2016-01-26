<?php if ($this->session->userdata('logged_in')) { ?>
<div class="row">
    <div class="col-md-12">
            
            
        <h2><?php echo $current; ?></h2>
        <h1>Vertegenwoordigers</h1>
        <p><?php echo anchor('contact/viewCreateVertegenwoordigerPage', '<span class="btn btn-default glyphicon glyphicon-plus" aria-hidden="true">Vertegenwoordiger toevoegen</span>');?></p>
        <?php if ($vertegenwoordiger != null) { ?>
            <table class="table">    
                <tr>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>e-mail</th>
                    <th>Telefoonnummer</th>
                    <th>Regio</th>
                </tr>
                <?php

                foreach ($vertegenwoordiger as $item) {
                    ?>
                    <tr>
                        <td> <?php echo $item->Voornaam ?></td>
                        <td> <?php echo $item->Achternaam ?></td>
                        <td> <?php echo $item->EMail ?></td>
                        <td> <?php echo $item->TelefoonNr ?></td>
                        <td> <?php echo $item->Regio ?></td>

                        <td><?php echo anchor('contact/viewUpdateVertegenwoordiger/' . $item->VertegenwoordigerID, '<span class="btn btn-default glyphicon glyphicon-pencil" aria-hidden="true">Aanpassen</span>');?></td>
                        <td><?php echo anchor('contact/deleteVertegenwoordiger/' . $item->VertegenwoordigerID, '<span class="btn btn-default glyphicon glyphicon-remove" aria-hidden="true">Verwijderen</span>');?></td>
                        </tr>
                    <?php
                }
                echo '</table>';
            } else {
                ?>
                <div><?php echo ("geen vertegenwoordigers om te tonen"); ?></div>
                <?php
            }
            ?>

            <h1>Afdelingen</h1>
            <p><?php echo anchor('contact/viewCreateAfdelingPage/', '<span class="btn btn-default glyphicon glyphicon-plus" aria-hidden="true">Afdeling toevoegen</span>');?></p>
        <?php if ($afdeling != null) { ?>
            <table class="table">    
                <tr>
                    <th>Afdeling</th>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Telefoonnummer</th>
                    <th>e-mail</th>
                </tr>
                <?php

                foreach ($afdeling as $item) {
                    ?>
                    <tr>
                        <td> <?php echo $item->Dienst ?></td>
                        <td> <?php echo $item->Voornaam ?></td>
                        <td> <?php echo $item->Achternaam ?></td>
                        <td> <?php echo $item->TelefoonNr ?></td>
                        <td> <?php echo $item->EMail ?></td>

                        <td><?php echo anchor('contact/viewUpdateAfdeling/' . $item->AfdelingID, '<span class="btn btn-default glyphicon glyphicon-pencil" aria-hidden="true">Aanpassen</span>');?></td>
                        <td><?php echo anchor('contact/deleteAfdeling/' . $item->AfdelingID, '<span class="btn btn-default glyphicon glyphicon-remove" aria-hidden="true">Verwijderen</span>');?></td>
                        </tr>
                    <?php
                }
                echo '</table>';
            } else {
                ?>
                <div><?php echo ("geen afdelingen om te tonen"); ?></div>
                <?php
            }
            ?>
    </div>
</div>
<?php
}
else
{
  echo 'U heeft onvoldoende permissie, gelieve in te loggen!'; 
}
