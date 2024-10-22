<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Core\Request;

class HomeController extends Controller
{
    protected User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        $data = array(
            'title' => 'MVC - Home',
            'description' => 'This is the homepage.',
            'users' => $users,
        );

        return view('home', 'main', $data);
    }

    public function create()
    {
        return view('create', 'main');
    }

    public function createUser(Request $request)
    {
        $this->validate($request->all());
        $this->user->create([
            ...$request->all(),
            'password' => md5($request->password)
        ]);
        return redirect('/', ['success' => 'User created successfully']);
    }
    public function update(int $id)
    {
        echo $id;
    }

    public function delete(int $id)
    {
        echo $id;
    }
}
