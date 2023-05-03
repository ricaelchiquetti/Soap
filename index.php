<?php

// Obtém a URL do serviço
$url = 'http://exemplo.com/servico?wsdl';

// Cria o objeto SoapClient
$client = new SoapClient($url);

// Chama um método do serviço
$result = $client->__soapCall('metodo', array('parametro1' => 'valor1', 'parametro2' => 'valor2'));

// Imprime o resultado
print_r($result);