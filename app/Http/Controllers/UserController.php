<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers()
    {
        $users = DB::table('users')->get();
        return view('users', ['data' => $users]);
        // return view('users');
    }

    // public function addPage()
    // {
    //     return view('add');
    // }
    public function addUsers(Request $request)
    {
        $user = DB::table('users')
            ->insert(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'city' => $request->city
                ]
            );
        return redirect()->route('allusers');
    }
    public function updatePage($id)
    {
        $users = DB::table('users')->find($id);
        return view('update', ['data' => $users]);
    }
    public function updateUser(Request $request, $id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'city' => $request->city
            ]);
        return redirect()->route('allusers');
    }

    public function deleteUser($id)
    {
        $users = DB::table('users')
            ->where('id', $id)
            ->delete();
        return redirect()->route('allusers');
    }
}