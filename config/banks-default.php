<?php

return [
    'SWEDBANK' => [
        'class' => '\opus\payment\adapters\Swedbank',
        'serviceUrl' => 'https://pangalink.net/banklink/swedbank',
        'pkcKeyPath' => 'Swed/private_key.pem',
        'pkcCertPath' => 'Swed/cert.pem',
        'params' => [
            'VK_SND_ID' => '',
            'VK_ACC' => '',
            'VK_NAME' => '',
        ],
    ],
    'SEB' => [
        'class' => '\opus\payment\adapters\Seb',
        'serviceUrl' => 'https://pangalink.net/banklink/seb',
        'pkcKeyPath' => 'SEB/private_key.pem',
        'pkcCertPath' => 'SEB/cert.pem',
        'params' => [
            'VK_ACC' => '',
            'VK_NAME' => '',
            'VK_SND_ID' => '',
        ],
    ],
    'DANSKE' => [
        'class' => '\opus\payment\adapters\Danske',
        'serviceUrl' => 'https://pangalink.net/banklink/sampo',
        'pkcKeyPath' => 'Danske/private_key.pem',
        'pkcCertPath' => 'Danske/cert.pem',
        'params' => [
            'VK_ACC' => '',
            'VK_NAME' => '',
            'VK_SND_ID' => '',
        ],
    ],
    'LHV' => [
        'class' => '\opus\payment\adapters\Lhv',
        'serviceUrl' => 'https://pangalink.net/banklink/lhv',
        'pkcKeyPath' => 'LHV/private_key.pem',
        'pkcCertPath' => 'LHV/cert.pem',
        'params' => [
            'VK_ACC' => '',
            'VK_NAME' => '',
            'VK_SND_ID' => '',
        ],
    ],
    'KREDIIDIPANK' => [
        'class' => '\opus\payment\adapters\Krediidipank',
        'serviceUrl' => 'https://pangalink.net/banklink/krediidipank',
        'pkcKeyPath' => 'Krediidipank/private_key.pem',
        'pkcCertPath' => 'Krediidipank/cert.pem',
        'params' => [
            'VK_ACC' => '',
            'VK_NAME' => '',
            'VK_SND_ID' => '',
        ],
    ],
    'NORDEA' => [
        'class' => '\opus\payment\adapters\Nordea',
        'serviceUrl' => 'https://pangalink.net/banklink/nordea',
        'params' => [
            'SOLOPMT_RCV_ID' => '',
            'SOLOPMT_LANGUAGE' => '4',
            'MAC_SECRET' => '',
        ],
    ],
    'ESTCARD' => [
        'class' => '\opus\payment\adapters\Estcard',
        'serviceUrl' => 'https://pangalink.net/banklink/ec',
        'pkcKeyPath' => 'ECOM/private_key.pem',
        'pkcCertPath' => 'ECOM/cert.pem',
        'params' => [
            'id' => '',
        ],
    ],
];