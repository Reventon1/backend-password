<?php

namespace App\Http\Controllers;

use App\Models\Password;

class PasswordController extends Controller
{
    public function generate()
    {
        $password = new Password();
        // $password = new Password();
        // $password->save();
        return response()->json($password, 200); 
    }

    public function delete($id)
    {
        $password = Password::find($id);
        $password->delete();
        return response()->json(['message' => 'удалено'], 200);
    }
}
