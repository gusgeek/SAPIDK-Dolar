<?php 

	include('./library.php');

    $return = SAPIDKDolar\Core::BuenBit();

    // $return =  SAPIDKDolar\Core::Galicia();

    // $return = SAPIDKDolar\Core::DolarSiMonedas();

    // $return =  SAPIDKDolar\Core::DolarSiCotiMedia();
    
    // $return =  SAPIDKDolar\Core::DolarSiCotiCapi();


    echo "<pre>";
	print_r($return);
	echo "</pre>";

	

?>