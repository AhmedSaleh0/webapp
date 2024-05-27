<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $http = new Client;

        $response = $http->post(config('services.passport.login_endpoint'), [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => config('services.passport.client_id'),
                'client_secret' => config('services.passport.client_secret'),
                'username' => $request->username,
                'password' => $request->password,
                'scope' => '*',
            ],
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withErrors(['message' => 'Invalid credentials or unsupported grant type.']);
        }

        $data = json_decode((string) $response->getBody(), true);

        dd($data);
        // Store token in session
        $request->session()->put('passport_token', $data['access_token']);

        return redirect()->route('protected');
    }
}
