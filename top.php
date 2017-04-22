<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Owtel</title>

        <!--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="js/globe/osg-debug.js"></script>
        <script type="text/javascript" src="js/globe/globe.js"></script>
        <script type="text/javascript" src="js/globe/world.js"></script>
        <script type="text/javascript" src="js/globe/height.min.js"></script>
        <!--<script type="text/javascript" src="js/globe/height.js"></script>-->
        <script type="text/javascript" src="js/globe/country.js"></script>
        <script type="text/javascript" src="js/globe/coast.js"></script>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <?php
        $page = str_replace("/","",$_SERVER['REQUEST_URI']);

        $home_active = "";
        $rates_active = "";
        $faq_active = "";

        


        /*if($page == "rates"){
            $sub_text = "Rates";
            $sub_width = "230px";
        }else if($page == "customer-service"){
            $page = "customer-service";
            $sub_text = "Customer Support";
            $sub_width = "auto";
        }else if($page == "contact-us"){
            $page = "customer-service";
            $sub_text = "Contact Us";
            $sub_width = "auto";
        }else if($page == "faq"){
            $page = "customer-service";
            $sub_text = "FAQ";
            $sub_width = "auto";
        }else{

        }*/
    ?>

    <style>
        <?php if($page == ""){ ?>
            #nav-{
                border-bottom: 1px solid #f06937;
            }
        <?php }else{ ?>

            #nav-<?php echo $page; ?>:hover{
                border-bottom: none;
            }

            /*#nav-<?php echo $page; ?>:after{
                content: "<?php echo $sub_text; ?>";
                width: <?php echo $sub_width; ?>;
                display: block;            
                text-align: left;
                font-family: GothamRounded-Bold;
                font-size: 9px;
                margin-top: 5px;
                border-bottom: 1px solid #f06937;
            }*/
        <?php } ?>
    </style>
    <body class="<?php echo (isset($body_class))?$body_class:""; ?>">
