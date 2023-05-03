<?php

    // Define a URL do WSDL do serviço
    $url = 'https://www.crcind.com/csp/samples/SOAP.Demo.cls?wsdl';

    // Define os parâmetros para a chamada do método
    $params = array(
        'Arg' => 'hello world',
    );

    // Define as opções para a conexão SOAP
    $options = array(
        'trace' => 1,
        'exceptions' => true,
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
        ),
    );

    // Cria o objeto SOAPClient
    $client = new SOAPClient($url, $options);

    // Chama o método do serviço
    $result = $client->Test($params);

    // Imprime o resultado
    print_r($result);