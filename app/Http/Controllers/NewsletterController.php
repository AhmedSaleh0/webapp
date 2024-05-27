<?php
namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewsletterController extends Controller
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

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $response = $this->authService->getAccessToken();

        if ($response['status'] !== 200) {
            return response()->json(['error' => 'Failed to retrieve access token.'], $response['status']);
        }

        $accessToken = $response['access_token'];

        try {
            $response = $this->client->post($this->baseUri .'/api/newsletter/subscribe', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                    'Accept' => 'application/json',
                ],
                'form_params' => [
                    'email' => $request->email,
                    'list' => 'pre-launch',
                ],
            ]);

            $statusCode = $response->getStatusCode();
            $responseBody = json_decode($response->getBody(), true);

            if ($statusCode === 200) {
                return response()->json(['message' => 'Subscribed successfully!'], 200);
            }

            if ($statusCode === 409) {
                return response()->json(['error' => 'Email already subscribed.'], 409);
            }

            return response()->json(['error' => 'Failed to subscribe.'], $statusCode);
        } catch (RequestException $e) {
            $statusCode = $e->getResponse() ? $e->getResponse()->getStatusCode() : 500;
            $responseBody = $e->getResponse() ? json_decode($e->getResponse()->getBody()->getContents(), true) : null;

            if ($statusCode === 409) {
                return response()->json(['error' => 'Email already subscribed.'], 409);
            }

            return response()->json(['error' => 'Failed to subscribe.'], $statusCode);
        }
    }
    public function unsubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $response = $this->authService->getAccessToken();

        if ($response['status'] !== 200) {
            return response()->json(['error' => 'Failed to retrieve access token.'], $response['status']);
        }

        $accessToken = $response['access_token'];

        try {
            $response = $this->client->post($this->baseUri .'/api/newsletter/unsubscribe', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                    'Accept' => 'application/json',
                ],
                'form_params' => [
                    'email' => $request->email,
                ],
            ]);

            $statusCode = $response->getStatusCode();
            $responseBody = json_decode($response->getBody(), true);

            if ($statusCode === 200) {
                return response()->json(['message' => 'Unsubscribed successfully!'], 200);
            }

            return response()->json(['error' => 'Failed to unsubscribe.'], $statusCode);
        } catch (RequestException $e) {
            $statusCode = $e->getResponse() ? $e->getResponse()->getStatusCode() : 500;
            $responseBody = $e->getResponse() ? json_decode($e->getResponse()->getBody()->getContents(), true) : null;

            return response()->json(['error' => 'Failed to unsubscribe.'], $statusCode);
        }
    }
}
