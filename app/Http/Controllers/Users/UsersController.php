<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function new()
    {
        return view('users.new');
    }

    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        
        $validated['plain_password'] = $validated['password'];
        $validated['password'] = bcrypt($validated['password']);

        $validated['role_id'] = match ($validated['role']) {
            'admin' => 1,
            'sales' => 2,
            'delivery' => 3,
            default => null,
        };  

        unset($validated['role']);

        try {
            User::create($validated);
            
            return response()->json([
                'status' => 'success',
                'message' => 'New user has been created successfully!',
                'desc' => 'All changes are now live. You can continue using the tool or revisit your profile anytime to make further updates.',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create user.',
                'desc' => $e->getMessage(),
            ], 500);
        }

    }
}
