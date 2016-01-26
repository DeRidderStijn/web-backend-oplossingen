<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $current; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The official Van Bouwel Kranen Verkoop & Service BVBA Website">
        <meta name="keywords" content="Van Bouwel Kranen, Van Bouwel, Minikranen, Minicranes, Mini-grues, kranen, cranes, grues, VBA, VBI, VBO, Hidrokon, Atlas, Winlet, Ozgul, Kapellen, Antwerpen, België, Verkoop, Verhuur">
        <meta name="author" content="Van Bouwel Kranen">
        <!-- online stylesheets-->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!--<link href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" rel="stylesheet">-->
        <!--<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css" rel="stylesheet">-->
        <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <!-- local stylesheets -->
        <link href="<?php echo base_url() . APPPATH; ?>css/reset.css" rel="stylesheet">
        <link href="<?php echo base_url() . APPPATH; ?>css/style.css" rel="stylesheet">
        <!-- fonts -->
        <link href="//fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:700' rel='stylesheet" type="text/css">
        <link rel="shortcut icon" href="<?php echo base_url() . APPPATH; ?>images/favicon.ico">
        <link rel="shortcut icon" href="hook.png">
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
          
    </head>
    <body>

        <div class="navbar">
            <nav>  
              <ul>
                
                <li <?php if ($active == 'Home') echo 'class=active'; ?>><?php echo anchor('home/home/', 'Home'); ?></li>
                    <?php
                if ($this->session->userdata('logged_in')) { ?>
                
                <li <?php if ($active == 'Dashboard') echo 'class=active'; ?>><?php echo anchor('dashboard/dashboard/', 'Dashbord'); ?></li>
                <li <?php if ($active == 'Todo') echo 'class=active'; ?>><?php echo anchor('todo/viewTodo/', 'Todo'); ?></li>
                <li> <?php echo anchor('login/logout', 'logout' . '(' . $this->session->userdata["logged_in"]["username"] . ')'); ?> </li>
                <?php } else { ?>
                <li <?php if ($active == $this->lang->line("login")) echo 'class=active'; ?>><?php echo anchor('login/index', "login"); ?></li>
                <li <?php if ($active == 'Register') echo 'class=active'; ?>><?php echo anchor('login/viewCreateUser/', 'Registreer'); ?></li>
                <?php
                                    }
 ?>                    
                                   
                </ul>       
            </div>
    </nav>
    <div class="container">

    <?php echo $content; ?>
    <!--end container-->
    </div>
           
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
          <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js"></script>
    </body>
</html>