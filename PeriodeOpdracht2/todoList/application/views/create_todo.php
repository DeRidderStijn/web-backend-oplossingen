<?php if ($this->session->userdata('logged_in')) { ?>
<div class="row">
    <div class="col-xs-12">
        <form method="post" action="<?php echo site_url() ?>/todo/createTodo" enctype="multipart/form-data" accept-charset="utf-8" >
            <div class="form-group">
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Beschrijving*</label>
                    <div class="col-sm-10">
                        <input type="text" id="beschrijving" class="form-control" name="beschrijving" autofocus="" required="">
                    </div>
                </div></br>
                
                
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Submit" class="btn btn-default"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
}
else
{
echo 'U heeft onvoldoende permissie, gelieve in te loggen! ';
}
?>