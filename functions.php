<?php
include_once('dbquery.php');
$db = new dbquery();

if (isset($_GET['action'])) {

    if($_GET['action'] == 'getRate'){

        if(isset($_GET['country_code'])){
            $country_code = $_GET['country_code'];
        }

        $_result = $db->get_rateByCountryCode($country_code);

        echo  json_encode($_result);
    }


    if($_GET['action'] == 'getRates'){
        
        if(isset($_GET['country_code'])){
            $country_code = $_GET['country_code'];
        }

        $_result = $db->get_rateByCountryCode($country_code);

        echo  json_encode($_result);   
    }
}
