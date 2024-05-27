<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class AuthService
{
    protected $client;
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.backend_service');
        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);
    }

    public function getAccessToken()
    {
        try {
            $response = $this->client->post($this->baseUri . '/oauth/token', [
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => config('services.passport.client_id'),
                    'client_secret' => config('services.passport.client_secret'),
                ],
            ]);

            return [
                'status' => $response->getStatusCode(),
                'access_token' => json_decode($response->getBody(), true)['access_token'],
            ];
        } catch (RequestException $e) {
            Log::error('Access token retrieval failed: ' . $e->getMessage());
            return [
                'status' => $e->getResponse() ? $e->getResponse()->getStatusCode() : 500,
                'error' => $e->getMessage(),
            ];
        }
    }
}
