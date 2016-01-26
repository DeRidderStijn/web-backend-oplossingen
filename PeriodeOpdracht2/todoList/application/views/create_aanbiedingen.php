<?php if ($this->session->userdata('logged_in')) { ?>
<div class="row">
    <div class="col-xs-12">
        <form method="post" action="<?php echo site_url() ?>/aanbiedingen/createAanbiedingen" enctype="multipart/form-data" accept-charset="utf-8" >
            <div class="form-group">
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Titel*</label>
                    <div class="col-sm-10">
                        <input type="text" id="titel" class="form-control" name="titel" autofocus="" required="" placeholder="Titel"  value="<?php echo $aanbiedingen->Titel; ?>" >
                    </div>
                </div></br>
                <div class="row">    
                    <label for="infoNL" class="col-sm-2 control-label">Beschrijving NL</label>
                    <div class="col-sm-10">
                        <input type="text" id="beschrijvingNL" class="form-control" name="beschrijvingNL" autofocus="" placeholder=""  value="<?php echo $aanbiedingen->BeschrijvingNL; ?>" >
                    </div>
                </div></br>
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Beschrijving EN</label>
                    <div class="col-sm-10">
                        <input type="text" id="beschrijvingEN" class="form-control" name="beschrijvingEN" autofocus="" placeholder=""  value="<?php echo $aanbiedingen->BeschrijvingEN; ?>" >
                    </div>
                </div></br>
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Beschrijving FR</label>
                    <div class="col-sm-10">
                        <input type="text" id="beschrijvingFR" class="form-control" name="beschrijvingFR" autofocus="" placeholder=""  value="<?php echo $aanbiedingen->BeschrijvingFR; ?>" >
                    </div>
                </div></br>
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Prijs</label>
                    <div class="col-sm-10">
                        <input type="text" id="prijs" class="form-control" name="prijs" autofocus="" placeholder=""  value="<?php echo $aanbiedingen->Prijs; ?>" >
                    </div>
                </div></br>
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Bouwjaar</label>
                    <div class="col-sm-10">
                        <input type="text" id="bouwjaar" class="form-control" name="bouwjaar" autofocus="" placeholder=""  value="<?php echo $aanbiedingen->Bouwjaar; ?>" >
                    </div>
                </div></br>
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Urenstand</label>
                    <div class="col-sm-10">
                        <input type="text" id="urenstand" class="form-control" name="urenstand" autofocus="" placeholder=""  value="<?php echo $aanbiedingen->Urenstand; ?>" >
                    </div>
                </div></br>
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Kilometerstand</label>
                    <div class="col-sm-10">
                        <input type="text" id="kilometerstand" class="form-control" name="kilometerstand" placeholder=""  value="<?php echo $aanbiedingen->Kilometerstand; ?>" >
                    </div>
                </div></br>
                <div class="row">    
                    <!--<label for="naam" class="col-sm-2 control-label">IsTweedehands (ja = 1/ nee = 2)</label>
                    <div class="col-sm-10">
                        <input type="isTweedehands" id="infoFR" class="form-control" name="isTweedehands" required="" autofocus="" placeholder=""  value="<?php echo $aanbiedingen->IsTweedehands; ?>" >
                    </div>-->
                    <div class="col-sm-10">                  
                        <select class="form-control" name="isTweedehands">
                          <option value="2">Stock</option>
                          <option value="1">Tweedehands</option>
                        </select>
                    </div>
                </div>
            </br>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="Foto">Type foto</label>
                <div class="col-sm-5"> 
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">select_an_image</span><span class="fileinput-exists">change</span><input type="file" name="userfile[]"></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?php echo $this->lang->line("remove"); ?></a>
                        </div>
                    </div>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label" for="Lastentabel">Lastentabel</label>
                <div class="col-sm-5"> 
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">select_an_image</span><span class="fileinput-exists">change</span><input type="file" name="userfile[]"></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?php echo $this->lang->line("remove"); ?></a>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            <input class="hidden" name="stockID" value="<?php echo $aanbiedingen->StockID; ?>"/>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn btn-default"/>
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