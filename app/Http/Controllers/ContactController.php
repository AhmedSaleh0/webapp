<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ContactController extends Controller
{
    protected $authService;
    protected $client;
    protected $baseUri;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
        $this->baseUri = config('services.backend_service');
        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $response = $this->authService->getAccessToken();

        if ($response['status'] !== 200) {
            return response()->json(['error' => 'Failed to retrieve access token.'], $response['status']);
        }

        $accessToken = $response['access_token'];

        try {
            $response = $this->client->post($this->baseUri . '/api/contact/send', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                    'Accept' => 'application/json',
                ],
                'form_params' => [
                    'name' => $request->name,
                    'email' => $request->email,
                    'message' => $request->message,
                ],
            ]);

            $statusCode = $response->getStatusCode();
            $responseBody = json_decode($response->getBody(), true);

            if ($statusCode === 200) {
                return response()->json(['message' => 'Message sent successfully!'], 200);
            }

            return response()->json(['error' => 'Failed to send message.'], $statusCode);
        } catch (RequestException $e) {
            $statusCode = $e->getResponse() ? $e->getResponse()->getStatusCode() : 500;
            $responseBody = $e->getResponse() ? json_decode($e->getResponse()->getBody()->getContents(), true) : null;

            return response()->json(['error' => 'Failed to send message.'], $statusCode);
        }
    }
}
