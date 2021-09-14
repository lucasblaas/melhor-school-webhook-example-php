<?php

namespace App\Enums;

class ExampleEnum
{
    public const METHOD_POST = "POST";

    public const WEBHOOK_ENDPOINT = 'https://melhorenvio.test/api/v2/shipping/tracking';

    public const AUTHORIZATION_CODE = [
        'ORD-202109172' => '12345678910',
        'ORD-202109171' => '10987654321'
    ];

    public const EVENTS_POSTED = [
        [
            "data" => "2021-08-18 12:16:55",
            "status" => "EMISSAO",
            "unidade" => "LOREM IPSUM 1",
        ],
        [
            "data" => "2021-08-19 12:17:15",
            "status" => "TRANSFERENCIA",
            "unidade" => "LOREM IPSUM 2",
        ],
        [
            "data" => "2021-08-20 12:18:09",
            "status" => "ENTRADA",
            "unidade" => "LOREM IPSUM 3",
        ],
        [
            "data" => "2021-08-21 12:19:43",
            "status" => "TRANSFERENCIA",
            "unidade" => "LOREM IPSUM 4",
        ]
    ];

    public const EVENTS_DELIVERED = [
        [
            "data" => "2021-08-18 12:16:55",
            "status" => "EMISSAO",
            "unidade" => "LOREM IPSUM 1",
        ],
        [
            "data" => "2021-08-19 12:17:15",
            "status" => "TRANSFERENCIA",
            "unidade" => "LOREM IPSUM 2",
        ],
        [
            "data" => "2021-08-20 12:18:09",
            "status" => "ENTRADA",
            "unidade" => "LOREM IPSUM 3",
        ],
        [
            "data" => "2021-08-21 12:19:43",
            "status" => "TRANSFERENCIA",
            "unidade" => "LOREM IPSUM 4",
        ],
        [
            "data" => "2021-08-22 13:32:30",
            "status" => "ENTRADA",
            "unidade" => "LOREM IPSUM 5",
        ],
        [
            "data" => "2021-08-22 13:47:07",
            "status" => "EM ROTA",
            "unidade" => "LOREM IPSUM 6",
        ],
        [
            "data" => "2021-08-22 13:57:18",
            "status" => "ENTREGUE",
            "unidade" => "LOREM IPSUM 7",
        ],
    ];

}
