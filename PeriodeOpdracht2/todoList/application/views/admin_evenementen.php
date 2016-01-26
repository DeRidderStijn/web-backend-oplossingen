<?php if ($this->session->userdata('logged_in')) { ?>
<?php echo anchor('evenementen/viewCreateEvents/', '<span class="btn btn-default glyphicon glyphicon-plus" aria-hidden="true">Nieuw</span>');?>
            <table style="width:100%">
            <tr>
                <th>Titel</th>
                <th>Beschrijving NL</th>
                <th>Beschrijving EN</th>
                <th>Beschrijving FR</th>
                <th>Link tickets</th>
                <th>Link site</th>
                <th>Foto</th>
            </tr>
           
                <?php
                foreach ($events as $event){ ?>
                <tr>
                    <td><?php echo $event->Titel ?></td>
                    <td><?php echo $event->BeschrijvingNL ?></td>
                    <td><?php echo $event->BeschrijvingEN ?></td>
                    <td><?php echo $event->BeschrijvingFR ?></td>
                    <td><?php echo $event->LinkTickets ?></td>
                    <td><?php echo $event->LinkSite ?></td>
                    <td><?php echo $event->Foto ?></td>
                    <td><?php echo anchor('evenementen/viewUpdateEvents/' . $event->EvenementID, '<span class="btn btn-default glyphicon glyphicon-pencil" aria-hidden="true">Aanpassen</span>');?></td>
                    <td><?php echo anchor('evenementen/deleteEvents/' . $event->EvenementID, '<span class="btn btn-default glyphicon glyphicon-remove" aria-hidden="true">Verwijderen</span>');?></td>
                </tr>
                    <?php
                }
                
                ?>
               
            
            </table>
<?php
}
else
{
    echo 'U heeft onvoldoende permissie, gelieve in te loggen! ';
}