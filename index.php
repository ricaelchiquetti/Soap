<?php

// Define a URL do WSDL do serviço
$wsdl = 'https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL';

// Define as opções para o cliente SOAP
$options = [
    'soap_version' => SOAP_1_2,
    'trace' => 1,
    'exceptions' => true,
];

// Cria o objeto SoapClient
$client = new SoapClient($wsdl, $options);

// Chama os métodos
$resultAddInteger = $client->AddInteger(['Arg1'=>50, 'Arg2'=>60]);
$resultDivideInteger = $client->DivideInteger(['Arg1'=>50, 'Arg2'=>60]);
$resultMission = $client->Mission();

// Imprime os resultados
print_r($resultAddInteger);
echo'<br>';
print_r($resultDivideInteger);
echo'<br>';
print_r($resultMission);