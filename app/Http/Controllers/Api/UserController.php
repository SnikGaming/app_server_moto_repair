<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function getUserInfo()
    {
        $user = auth()->user();
        return response()->json([
            'message' => 'Successful',
            'status' => 200,
            'data' => [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'image' => asset("storage/user/{$user->image}"),
                'gender' => $user->gender
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $imageName = Str::random(32) . "." . $request->image->getClientOriginalExtension();
            $path = public_path('storage/user');
            Storage::disk('public')->put("/user/{$imageName}", file_get_contents($request->image));

            User::create([
                'name' => $request->name,
                'image' => $imageName,
                'gender' => $request->input('gender', 1),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
            ]);
            return response()->json([
                'message' => 'create successful'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went really wrong !'
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request)
    {
        try {
            $user = auth()->user();
            $user->name = $request->input('name', $user->name);
            // $user->email = $request->input('email', $user->email);
            $user->phone = $request->input('phone', $user->phone);
            $user->gender = $request->input('gender', $user->gender);
            if ($request->hasFile('image')) {
                $storege = Storage::disk('public');

                if ($storege->exists($user->image)) {
                    $storege->delete($user->image);
                }
                $imageName = Str::random(32) . "." . $request->image->getClientOriginalExtension();
                $storege->put("/user/{$imageName}", file_get_contents($request->image));
                $user->image = $imageName;
            }
            $user->save();

            return response()->json([
                'message' => 'Update successful',
                'data' => [
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone,
                    'image' => $user->image,
                    'gender' => $user->gender
                ]
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went really wrong !'
            ], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
