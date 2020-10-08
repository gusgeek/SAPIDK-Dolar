<?php 

	
	namespace SAPIDKDolar;

	class Core{

		public static function Galicia () {

			$dolarGalicia = "https://www.bancogalicia.com/cotizacion/cotizar?currencyId=02&quoteType=SU&quoteId=999";
			$jsonDolar = file_get_contents($dolarGalicia);
				$dolar = json_decode($jsonDolar);

				$array = array();
			

			if (isset( $dolar->{'error'})) {

				$array['bg-status'] = 0; 

			} else {

				$array['bg-status'] = 1; 
				$array['bg-compra'] = $dolar->{'buy'}; 
				$array['bg-venta'] = $dolar->{'sell'}; 

			}

			return $array;

		}

		public static function DolarSiMonedas () {

			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://www.dolarsi.com/api/api.php?type=cotizador",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			));

			$response = curl_exec($curl);

				curl_close($curl);

				$monedas = json_decode($response, true);


			return $monedas;

		}

		public static function DolarSiCotiMedia () {

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://www.dolarsi.com/api/api.php?type=capital",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			));

			$response = curl_exec($curl);

			curl_close($curl);

				$monedas = json_decode($response, true);

			return $monedas;

		}

		public static function DolarSiCotiCapi () {

			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://www.dolarsi.com/api/api.php?type=dolar",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			));

			$response = curl_exec($curl);

			curl_close($curl);

			$monedas = json_decode($response, true);

			return $monedas;

		}

		public static function BuenBit () {

			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://be.buenbit.com/api/market/tickers/",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			));

			$response = curl_exec($curl);

			curl_close($curl);

			$monedas = json_decode($response, true);

			return $monedas;

		}


	}

 ?>