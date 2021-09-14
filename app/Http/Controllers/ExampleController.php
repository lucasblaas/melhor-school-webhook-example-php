<?php

namespace App\Http\Controllers;

use App\Enums\ExampleEnum;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use GuzzleHttp\Exception\GuzzleException;

class ExampleController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    /**
     * @throws GuzzleException
     */
    public function register(Request $request): JsonResponse
    {
        // Make some updates on carrier service database

        $payload = $this->mountPayload($request);

        $this->makeWebhookRequest($payload);

        return response()->json([
            'success' => true,
            'message' => sprintf("Sending webhook to %s", ExampleEnum::WEBHOOK_ENDPOINT),
            'payload' => $payload
        ]);
    }

    private function mountPayload(Request $request): array
    {
        return [
            'webhook' => [
                [
                    'pedido' => $request->get('order'),
                    'codigo' => ExampleEnum::AUTHORIZATION_CODE[
                        $request->get('order')
                    ],
                    'events' => $request->get('status') === 'posted' ? ExampleEnum::EVENTS_POSTED : ExampleEnum::EVENTS_DELIVERED
                ]
            ]
        ];
    }

    /**
     * @throws GuzzleException
     */
    private function makeWebhookRequest(array $payload): void
    {
        $client = new Client();
        $client->request(ExampleEnum::METHOD_POST, ExampleEnum::WEBHOOK_ENDPOINT, [
            'verify' => false,
            'form_params' => $payload
        ]);
    }
}
