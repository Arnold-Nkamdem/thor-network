<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderByDesc('created_at')->paginate(10);

        return response()->view('pages.user', compact('users'));
    }

    /**
     * Display a listing of the resource.
     */
    public function counting()
    {
        $users = User::count();
        $admins = User::where('role', '=', 'admin')->count();
        $posts = Post::count();
        $comments = Comment::count();

        if (auth()->user()->role == 'admin') {
            return response()->view('dashboard', compact('users', 'posts', 'comments', 'admins'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation flieds
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|min:3|max:25',
            'last_name' => 'required|string|min:3|max:25',
            'pseudo' => 'required|string|min:3|max:25|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|min:8|max:30|same:password',
        ]);

        $validated = $validator->validated();

        // Create user
        User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'pseudo' => $validated['pseudo'],
            'role' => 'admin',
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validation flieds
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|min:3|max:25',
            'last_name' => 'required|string|min:3|max:25',
            'pseudo' => ['required', 'string', 'min:3', 'max:25', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'role' => 'required|string',
        ]);

        if ($validator->fails()) {
            return abort(401);
        }

        $validated = $validator->validated();

        // Upate user
        $user->update( $validated);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Delete image
        if (isset($user->profile_photo_path)) {
            Storage::disk('public')->delete($user->profile_photo_path);
        }

        // We delete user
        $user->delete();

        return redirect()->route('users.index');
    }
}
