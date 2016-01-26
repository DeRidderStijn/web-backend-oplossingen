<?php if ($this->session->userdata('logged_in')) { ?>
<div class="row">
    <div class="col-md-12">
        
        <?php
        if ($this->session->userdata["user_messages"] != null)
        { ?>
            <p id="greenField"> <?php 
            echo $this->session->userdata["user_messages"];
            $this->session->set_userdata('user_messages', "");
            ?> </p>
        <?php
        }
        ?>

        <h1>De TODO-app</h1>
        <p><?php echo anchor('todo/viewCreateTodo', '<span class="btn btn-default glyphicon glyphicon-plus" aria-hidden="true">Voeg item toe </span>');?></p>
        <?php if ($todo == null && $done == null)
        {
            echo "<p>Nog geen Todo-items.</p>";
        }
        else
        { ?>
            <h2>Wat moet er allemaal gebeuren?</h2>

            <h3> Todo </h3>
        <?php if ($todo != null) { ?>
            
            <ul> <?php
            foreach ($todo as $item) { 
                ?>
                <li><?php echo anchor('todo/todoCompleted/' . $item->TodoID, '<span class="btn btn-default glyphicon glyphicon-ok" aria-hidden="true"></span>');?>
                    <?php echo $item->Beschrijving ; ?> 
                    <?php echo anchor('todo/deleteTodo/' . $item->TodoID, '<span class="btn btn-default glyphicon glyphicon-remove" aria-hidden="true"></span>');?> </li>
               
            <?php } ?>
            </ul>
            <?php
            } 
            else
            {
                echo "<p>Allright, all done!</p>";
            }

            ?>
        <h3> Done </h3>
        <?php if ($done != null) { ?>

            <ul> <?php
            foreach ($done as $item) { ?>
                <li> 
                <?php echo anchor('todo/uncomplete/' . $item->DoneID, '<span class="btn btn-default glyphicon glyphicon-ok" aria-hidden="true"></span>');?>
                <?php echo $item->Beschrijving ; ?> 
                <?php echo anchor('todo/deleteDone/' . $item->DoneID, '<span class="btn btn-default glyphicon glyphicon-remove" aria-hidden="true"></span>');?> 
                </li>

            <?php
            }
            ?>
            </ul>
            <?php
            }
            else
            {
                echo "<p>werk aan de winkel!</p>";
            }
            ?>
            </div>
        </div>

    <?php
        } ?>
        
<?php
}
else
{
  echo 'U heeft onvoldoende permissie, gelieve in te loggen!'; 
}
