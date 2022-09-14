<?php

namespace App\Services\OAuth;

use App\Contracts\OAuthContract;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class MicrosoftService implements OAuthContract {
    private Client $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => config('providers.microsoft.base_uri'),
            'timeout' => 5.0
        ]);
    }

    public function auth(string $code = null): array {
        $url = 'https://login.microsoftonline.com/organizations.onmicrosoft.com/oauth2/token';

        try {
            $response = $this->_client->request('POST', $url, [
                'form_params' => [
                    'client_id' => config('providers.microsoft.client_id'),
                    'client_secret' => config('providers.microsoft.secret'),
                    'grant_type' => 'client_credentials',
                    'resource' => 'https://rest.media.azure.net'
                ],
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Keep-Alive' => true
                ]
            ]);
    
            $data = json_decode($response->getBody(), true);

            return [
                'access_token' => $data['access_token']
            ];
        } catch (RequestException $exception) {
            dd($exception->getResponse()->getBody()->getContents());
        }
    }

    public function getAuthenticatedUser(string $token): array
    {
        $response = $this->_client->request('GET', config('providers.microsoft.base_uri'), [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json'
            ]
        ]);

        $payload = json_decode($response->getBody(), true);
            
        return [
            'id' => $payload['id'],
            'name' => $payload['givenName'],
            'surname' => $payload['surname'],
            'login' => $payload['displayName'],
            'surname' => $payload['surname'],
            'email' => $payload['mail']
        ];
    }
}