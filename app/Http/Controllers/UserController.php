<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $viewParams = [
        'users' => $users,
        ];
        return view('user.index', $viewParams);
    }

    public function signin()
    {
        return view('user.signin');
    }

    public function login(UserRequest $request)
    {
        $email    = $request->input('email');
        $password = $request->input('password');
        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
        return redirect('/')->with('error_message', 'I failed to login');
        }

        return redirect()->route('word.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.signin');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        $user     = new User;
        $name     = $request->input('name');
        $email    = $request->input('email');
        $password = $request->input('password');
        $params   = [
        'name'      => $name,
        'email'     => $email,
        'password'  => Hash::make($password),
        ];
        if (!$user->fill($params)->save()) {
        return redirect()->route('user.create')->with('error_message', 'User registration failed');
        }
        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
        return redirect()->route('user.signin')->with('error_message', 'I failed to login');
        }
        return redirect()->route('word.index');
    }

    public function edit($id)
    {
        $user       = User::find($id);
        $viewParams = [
        'user' => $user,
        ];
        $this->authorize('view', $user);
        return view('user.edit', $viewParams);
    }

    public function update(UserRequest $request, $id)
    {
        $user     = User::find($id);
        $name     = $request->input('name');
        $email    = $request->input('email');
        $password = $request->input('password');
        $params   = [
            'name'      => $name,
            'email'     => $email,
            'password'  => Hash::make($password),
        ];
        $this->authorize('update', $user);
        if (!$user->userSave($params)) {
            // 更新失敗
            return redirect()
                    ->route('user.edit', ['user' => $user->id])
                    ->with('error_message', 'Update user failed');
        }
        return redirect()->route('word.index')->with('flash_message', 'update success!!');
    }

    public function destroy($id)
    {
        $this->adminCheck();
        $user = User::find($id);
        if (!$user->delete()) {
        return redirect()->route('user.index')->with('error_message', 'Delete user failed');
        }
        return redirect()->route('user.index')->with('flash_message', 'delete success!!');
    }

    private function adminCheck()
    {
        $adminFlg = Auth::user()->admin_flg;
        if (!$adminFlg) {
        abort(404);
        }
        return true;
    }
}
