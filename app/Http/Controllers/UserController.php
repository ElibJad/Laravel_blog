<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(9);
        return view('user.users', compact('users'));
    }

    public function show(User $user){
        return view('user.user', compact('user'));
    }

    public function create(){
        return view('user.createUser');
    }

    public function store(UserRequest $request){
        $formField = $request->validated();
        $formField['password'] = Hash::make($request->password);
        $image=$this->uploadImage($request, $formField);
        $formField['image'] = $image;
        User::create($formField);
        return redirect()->route('users.index')->with('success', 'Votre compte a ete créé avec succès');
    }

    public function destroy(User $user){
        $user->delete();
        return to_route('users.index')->with('success', 'Le compte a etes bien supprimer');
    }

    public function edit(User $user){
        return view('user.updateUser', compact('user'));
    }

    public function update(UserRequest $request, User $user){
        $formField = $request->validated();
        $formField['password'] = Hash::make($request->password);
        $image=$this->uploadImage($request, $formField);
        $formField['image'] = $image;
        $user->fill($formField)->save();
        return to_route('users.index', $user->id)->with('success', 'Le compte a etes bien modifie');
    }
    private function uploadImage(UserRequest $request, array &$formField){
        unset($formField['image']);
        if($request->hasFile('image')){
            return $request->file('image')->store('imageUser', 'public');
        }
    }
}
