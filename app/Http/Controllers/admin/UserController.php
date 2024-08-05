<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $data = User::all();

        return view('admin.user.list', compact('data'));
    }

    public function create()
    {

        return view('admin.user.add');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'type' => 'required|in:' . User::TYPE_ADMIN . ',' . User::TYPE_MEMBER,
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'type' => $request->type,
        ]);

        return redirect()->route('admin.user.list')->with('success', 'Người dùng đã được thêm mới thành công.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'type' => 'required|in:admin,member',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.user.list')->with('success', 'Người dùng đã được cập nhật thành công.');
    }


    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user.list')->with('success', 'Người dùng đã được xóa thành công.');
    }
}
