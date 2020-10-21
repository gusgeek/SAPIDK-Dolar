<?php 

	include('./library.php');

    $return = SAPIDKDolar\Core::Saldos();

    // $return =  SAPIDKDolar\Core::Galicia();

    // $return = SAPIDKDolar\Core::DolarSiMonedas();

    // $return =  SAPIDKDolar\Core::DolarSiCotiMedia();
    
    // $return =  SAPIDKDolar\Core::DolarSiCotiCapi();

    // $return = SAPIDKDolar\Core::BancoNacion();


    echo "<pre>";
	print_r($return);
	echo "</pre>";

	

?>