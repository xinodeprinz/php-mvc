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
        return view('form', 'main');
    }

    public function createUser(Request $request)
    {
        $this->validate($request->all());
        $this->user->create([
            ...$request->all(),
            'password' => md5($request->password)
        ]);
        return redirect('/', ['success' => 'User created']);
    }

    public function updateForm(int $id)
    {
        $user = $this->user->find($id);
        // Remove the password
        unset($user->password);
        setOld((array) $user);
        return view('form', 'main', ['id' => $id]);
    }

    public function update(Request $request, int $id)
    {
        $this->validate($request->all());
        $this->user->update($id, [
            ...$request->all(),
            'password' => md5($request->password)
        ]);
        return redirect('/', ['success' => 'User updated']);
    }

    public function delete(int $id)
    {
        $this->user->delete($id);
        return back(['success' => 'User deleted']);
    }
}
