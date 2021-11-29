<?php

namespace App\Http\Livewire;
use App\Models\HandyController;
use Illuminate\Http\Request;
use Livewire\Component;

class UsersCOmponent extends Component
{
    public function store(Request $request)
    {
        $user = new HandyController();

        $user->name = request('name');
        $user->residence = request('residence');

        $user->save();

        return "Hello mf";
    }
    public function users()
    {
        return view('users');
    }
    public function render()
    {
        return view('livewire.users-c-omponent');
    }

}
