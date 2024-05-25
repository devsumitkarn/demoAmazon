<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Http\Requests\Admin\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('admin.pages.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        session()->flash('success', 'Your File As Been Created');
        return to_route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.pages.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.pages.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        session()->flash('success', 'Your File As Been Updated');
        return to_route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', 'Your File As Been Deleted');
        return to_route('admin.users.index');
    }
}
