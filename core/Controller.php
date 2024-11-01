<?php

namespace Core;

class Controller
{
    /**
     * @param array $data An associative array of the data to validate
     */
    protected function validate(array $data)
    {
        $keys = array_keys($data);
        foreach ($keys as $key) {
            if (empty($data[$key])) {
                setOld($data);
                back(['error' => "The {$key} is required."]);
                exit;
            }
        }
    }

    /**
     * Middleware for guest routes
     */
    protected function guest()
    {
        $userId = session('userId');
        if ($userId) {
            return redirect('/dashboard');
        }
    }

    /**
     * Middleware for auth routes
     */
    protected function auth()
    {
        $userId = session('userId');
        if (!$userId) {
            return redirect('/login');
        }
    }

    protected function logout()
    {
        session(['userId' => null]);
    }
}
