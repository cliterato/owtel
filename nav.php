<?php
 
    $urlParams = explode('/', $_SERVER['REQUEST_URI']);

    $page = "";

    if(!empty($urlParams[1])){
        $page = $urlParams[1];
    }

    $whiteOwtel_logo = "img/logo-white.png";
    $blackOwtel_logo = "img/logo-black.png";

    $HasblackOwtel_logo = array("rates");

    if(in_array($page, $HasblackOwtel_logo)){
        $owtel_logo = $blackOwtel_logo;
    }else{
        $owtel_logo = $whiteOwtel_logo;
    }
?>

<div id="nav" class="row">
    <div class="col-md-5 col-sm-2 col-xs-6">
        <div id="logo">
            <a href="/" class="navbar-brand"><img src="<?php echo $owtel_logo;?>" alt="owtel" /></a>
        </div>
    </div>

    <div class="col-md-7 col-sm-10 col-xs-6">
        <nav class="navbar navbar-default" role="navigation">
            <div class="row" >
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span> 
                             <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/" id="nav-" class="uppercase">Home</a></li>
                            <li class="dropdown">
                                <ul class="dropdown-menu">
                                    <li><a href="/dialing_method">Toll Free Dialing</a></li>
                                    <li><a href="/rates">Owtel App Rates</a></li>
                                </ul>

                                <a href="#" id="nav-rates" class="dropdown-toggle uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products & Services</a>
                            </li>
                            <li class="dropdown">
                                <ul class="dropdown-menu">
                                    <li><a href="/faq">FAQ</a></li>
                                    <li><a href="/customer-service">Customer Support</a></li>
                                    <li><a href="/contact-us">Contact Us</a></li>
                                </ul>

                                <a href="#" id="nav-customer-service" class="dropdown-toggle uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Customer Services</a>
                            </li>
                            <!--li class="dropdown">
                                <ul id="language-menu" class="dropdown-menu" style="min-width: 0px;">
                                    <li><a href="#">EN</a></li>
                                    <li><a href="#">PH</a></li>
                                    <li><a href="#">JP</a></li>
                                </ul>

                                <a href="#" id="lang" class="dropdown-toggle uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #ccc; font-family: GothamRounded-Light; font-size: 11px;">EN <i class="fa fa-angle-down"></i></a>
                            </li-->
                            <li class="hidden-sm hidden-md hidden-lg">
                                <div id="menu-social">
                                    <h5>Follow Us</h5>
                                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>