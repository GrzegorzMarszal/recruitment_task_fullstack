<?php

declare(strict_types = 1);

namespace App\Test\Unit\Data;

class NBPApiResponseData
{
    public static function getCorrectData(): array
    {
        return [
            [
                'table' => 'A',
                'no' => "198/A/NBP/2024",
                'effectiveDate' => '2024-10-10',
                'rates' => [
                    [
                        'currency' => 'bat (Tajlandia)',
                        'code' => 'THB',
                        'mid' => 0.1172
                    ],
                    [
                        'currency' => 'dolar amerykański',
                        'code' => 'USD',
                        'mid' => 3.9355
                    ],
                    [
                        'currency' => 'dolar australijski',
                        'code' => 'AUD',
                        'mid' => 2.6458
                    ],
                    [
                        'currency' => 'dolar Hongkongu',
                        'code' => 'HKD',
                        'mid' => 0.5064
                    ],
                    [
                        'currency' => 'dolar kanadyjski',
                        'code' => 'CAD',
                        'mid' => 2.8658
                    ],
                    [
                        'currency' => 'dolar nowozelandzki',
                        'code' => 'NZD',
                        'mid' => 2.3910
                    ],
                    [
                        'currency' => 'dolar singapurski',
                        'code' => 'SGD',
                        'mid' => 3.0085
                    ],
                    [
                        'currency' => 'euro',
                        'code' => 'EUR',
                        'mid' => 4.3029
                    ],
                    [
                        'currency' => 'forint (Węgry)',
                        'code' => 'HUF',
                        'mid' => 0.010753
                    ],
                    [
                        'currency' => 'frank szwajcarski',
                        'code' => 'CHF',
                        'mid' => 4.5737
                    ],
                    [
                        'currency' => 'funt szterling',
                        'code' => 'GBP',
                        'mid' => 5.1452
                    ],
                    [
                        'currency' => 'hrywna (Ukraina)',
                        'code' => 'UAH',
                        'mid' => 0.0955
                    ],
                    [
                        'currency' => 'jen (Japonia)',
                        'code' => 'JPY',
                        'mid' => 0.026402
                    ],
                    [
                        'currency' => 'korona czeska',
                        'code' => 'CZK',
                        'mid' => 0.1700
                    ],
                    [
                        'currency' => 'korona duńska',
                        'code' => 'DKK',
                        'mid' => 0.5769
                    ],
                    [
                        'currency' => 'korona islandzka',
                        'code' => 'ISK',
                        'mid' => 0.028976
                    ],
                    [
                        'currency' => 'korona norweska',
                        'code' => 'NOK',
                        'mid' => 0.3649
                    ],
                    [
                        'currency' => 'korona szwedzka',
                        'code' => 'SEK',
                        'mid' => 0.3786
                    ],
                    [
                        'currency' => 'lej rumuński',
                        'code' => 'RON',
                        'mid' => 0.8648
                    ],
                    [
                        'currency' => 'lew (Bułgaria)',
                        'code' => 'BGN',
                        'mid' => 2.2000
                    ],
                    [
                        'currency' => 'lira turecka',
                        'code' => 'TRY',
                        'mid' => 0.1150
                    ],
                    [
                        'currency' => 'nowy izraelski szekel',
                        'code' => 'ILS',
                        'mid' => 1.0444
                    ],
                    [
                        'currency' => 'peso chilijskie',
                        'code' => 'CLP',
                        'mid' => 0.004215
                    ],
                    [
                        'currency' => 'peso filipińskie',
                        'code' => 'PHP',
                        'mid' => 0.0686
                    ],
                    [
                        'currency' => 'peso meksykańskie',
                        'code' => 'MXN',
                        'mid' => 0.2018
                    ],
                    [
                        'currency' => 'rand (Republika Południowej Afryki)',
                        'code' => 'ZAR',
                        'mid' => 0.2237
                    ],
                    [
                        'currency' => 'real (Brazylia)',
                        'code' => 'BRL',
                        'mid' => 0.7035
                    ],
                    [
                        'currency' => 'ringgit (Malezja)',
                        'code' => 'MYR',
                        'mid' => 0.9169
                    ],
                    [
                        'currency' => 'rupia indonezyjska',
                        'code' => 'IDR',
                        'mid' => 0.00025124
                    ],
                    [
                        'currency' => 'rupia indyjska',
                        'code' => 'INR',
                        'mid' => 0.046874
                    ],
                    [
                        'currency' => 'won południowokoreański',
                        'code' => 'KRW',
                        'mid' => 0.002914
                    ],
                    [
                        'currency' => 'yuan renminbi (Chiny)',
                        'code' => 'CNY',
                        'mid' => 0.5561
                    ],
                    [
                        'currency' => 'SDR (MFW)',
                        'code' => 'XDR',
                        'mid' => 5.2617
                    ]
                ]
            ]
        ];
    }
}