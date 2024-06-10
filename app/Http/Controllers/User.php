<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        if (auth()->user() != null) {
            if (auth()->user() != null && auth()->user()->role_id == 1 || auth()->user()->role_id == 3)
                return redirect(route('admin'));
            return view('user/profile');
        } else
            return view('/notUserOrAdmin');
    }

    public function updateUserInfo($id, Request $request)
    {
        $user = ModelsUser::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();
        return response()->json([
            'name' => $request->name,
            'phone' => $request->phone
        ]);
    }
}
