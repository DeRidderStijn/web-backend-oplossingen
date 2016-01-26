<!--    
insert into users (username, password) values ('username', MD5('password'));
VB_bureau
VB_16a2BE2547935ZC
-->
<div class="row">
    <div class="col-xs-12">
        <?php if( validation_errors()){ ?>
<div class="alert alert-warning" role="alert"><?php echo validation_errors(); ?></div>
        <?php } ?>
        
        <?php echo form_open('verifylogin', array('class' => "form-horizontal")); ?>
        <div class="form-group">
            <label for="username"class="col-sm-2 control-label"><?php echo $this->lang->line("username"); ?></label>
            <div class="col-sm-10">
                <input type="text" size="20" id="username" class="form-control" name="username" autofocus="" placeholder="<?php echo $this->lang->line("username"); ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label for="password"class="col-sm-2 control-label"><?php echo $this->lang->line("password"); ?></label>
            <div class="col-sm-10">
                <input type="password" size="20" id="password" class="form-control" name="password" placeholder="<?php echo $this->lang->line("password"); ?>"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Login" class="btn btn-default"/>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>