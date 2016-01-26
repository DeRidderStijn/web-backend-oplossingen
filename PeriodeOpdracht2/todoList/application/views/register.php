<!--    
insert into users (username, password) values ('username', MD5('password'));
VB_bureau
VB_16a2BE2547935ZC
-->
<div class="row">
    <div class="col-xs-12">
        <form method="post" action="<?php echo site_url() ?>/login/createUser" enctype="multipart/form-data" accept-charset="utf-8" >
            <div class="form-group">
                <div class="row">    
                    <label for="naam" class="col-sm-2 control-label">Email*</label>
                    <div class="col-sm-10">
                        <input type="email" id="email" class="form-control" name="email" autofocus="" required="" placeholder="" >
                    </div>
                </div></br>
                <div class="row">    
                    <label for="infoNL" class="col-sm-2 control-label">Password*</label>
                    <div class="col-sm-10">
                        <input type="password" id="password" class="form-control" name="password" autofocus="" placeholder="" >
                    </div>
                </div></br>
            </div>

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
