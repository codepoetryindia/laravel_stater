<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminPasswordChange extends Component
{
    public $password;
    public $confirm_password;

    public function mount()
    {
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password'
        ]);
    }

    public function submit()
    {
        $user = Auth::user();
        $this->validate([
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password'
        ]);

        try {
            $data = User::findOrFail($user->id);
            if (Hash::check($this->password, $data->password)) {
                return $this->emit('warning', __('message.same_as_recent_password'));
            }

            $data->password = Hash::make($this->password);
            $data->save();
            $this->resetForm();
            return $this->emit('success', __('message.password_upadate_success'));
        } catch (QueryException $e) {
            if (env("APP_DEBUG_MODE", false)) {
                $this->emit('error', $e->getMessage());
            } else {
                $this->emit('error', __('message.query_exception'));
            }
        }
    }
    public function resetForm()
    {
        $this->password = '';
        $this->confirm_password = '';
    }
    public function render()
    {
        return view('livewire.admin.admin-password-change');
    }
}
