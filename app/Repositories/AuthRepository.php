<?php 

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Services\OAuth\MicrosoftService;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;


class AuthRepository {

    public function authenticate(string $provider, string $token = null) {
        $service = $this->getProvider($provider);

        if (!$token)
            $token = $service->auth()['access_token'];

        $providerUser = $service->getAuthenticatedUser($token);

        Session::put('provider_user', $providerUser);

        $user = $this->findOrCreate($provider, $providerUser);
        Auth::login($user);
    }

    public function logout() {
        Auth::logout();
    }

    private function getProvider($provider) {
        return match ($provider) {
            'microsoft' => new MicrosoftService
        };
    }

    private function findOrCreate(string $provider, array $providerUser)
    {
        $payload = [
            $provider . '_username' => $providerUser['login'],
            "name" => $providerUser['name'],
            $provider . "_id" => $providerUser['id'],
            "email" => $providerUser['email']
        ];

        if ($user = User::where($provider . "_id", $payload[$provider . '_id'])->first()) {
            return $user;
        }

        if ($user = User::where('email', $payload['email'])->first()) {
            $user->update([
                $provider . "_id" => $payload[$provider . '_id'],
                $provider . "_username" => $payload[$provider . '_username']
            ]);

            return $user;
        }

        $payload['name'] = $providerUser['name'];

        /*
        $imagePath = 'avatars/' . Uuid::uuid4()->toString() . '.png';
        Storage::put('public/' . $imagePath, file_get_contents($payload['image']));
        $payload['image_path'] = $imagePath;
        */
        return User::create($payload);
    }
}