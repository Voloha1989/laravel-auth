<?php

namespace App\Http\Services;

class UserService
{
    /**
     * @param string $accessToken
     * @param array $userData
     * @return bool
     */
    public function checkAuth(string $accessToken, array $userData): bool
    {
        $userData['access_token'] = $accessToken;

        ksort($userData);

        $str = $this->strFormat($userData) . config('app.key');

        return mb_strtolower(md5($str), 'UTF-8') === $userData['sig'];
    }

    /**
     * @param array $userData
     * @return string
     */
    private function strFormat(array $userData): string
    {
        unset($userData['sig']);

        return implode('', array_map(function ($key, $value) {
            return "{$key}={$value}";
        }, array_keys($userData), $userData));
    }
}
