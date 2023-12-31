<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;

class UsersProfileController extends Controller
{
    public function index()
    {
      $users = Profiles::all();
        return view('users.index', compact('users'));

    }

    public function store(Request $request)
    {
        $user = Profiles::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_type' => $request->user_type,
            // 'password' => $request->password,
            // 'password_confirmation' => $request->password_confirmation,
        ]);

        return redirect()->back()->with('success', 'User added successfully');
    }

    public function edit($id)
    {
        $user = Profiles::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Profiles::find($id);
        $user->user_name = $request->input('user_name');
        $user->user_email = $request->input('user_email');
        $user->user_type = $request->input('user_type');
        $user->save();
        return redirect()->back()->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = Profiles::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
