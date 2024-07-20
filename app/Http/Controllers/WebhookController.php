<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        $intent = $request->input('queryResult.intent.displayName');
        $response = '';

        switch ($intent) {
            case 'skckCek':
                $response = $this->handleskckCek($request);
                break;
            default:
                $response = 'Maaf, saya tidak mengerti permintaan Anda.';
                break;
        }

        return response()->json([
            'fulfillmentText' => $response,
        ]);
    }

    private function handleskckCek($request)
    {
        // Logika untuk menangani pengurusan SKCK
        return 'Ini adalah respons untuk pengurusan SKCK.';
    }
}
