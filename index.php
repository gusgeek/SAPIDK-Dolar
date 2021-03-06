<?php 

	include('./vendor/autoload.php');

    $return = new phpDolar\Core();

    // $return =  SAPIDKDolar\Core::Galicia();

    // $return = SAPIDKDolar\Core::DolarSiMonedas();

    // $return =  SAPIDKDolar\Core::DolarSiCotiMedia();
    
    // $return =  SAPIDKDolar\Core::DolarSiCotiCapi();

    // $return = SAPIDKDolar\Core::BancoNacion();


    echo "<pre>";
	print_r($return->DolarSiMonedas());
	echo "</pre>";

	

?>