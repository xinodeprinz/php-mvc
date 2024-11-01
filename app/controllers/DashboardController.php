<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Core\Request;

class DashboardController extends Controller
{
    protected User $user;

    public function __construct()
    {
        $this->user = new User();
        $this->auth();
    }

    public function index()
    {
        $user = $this->user->auth();
        return view('dashboard', 'main', ['user' => $user]);
    }

    public function logout()
    {
        parent::logout();
        return redirect('/', ['success' => 'Logout successful']);
    }
}
