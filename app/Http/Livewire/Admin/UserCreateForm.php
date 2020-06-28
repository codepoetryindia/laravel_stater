<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreateForm extends Component
{
    protected $app_debug_mode;
    public $name;
    public $email;
    public $mobile;

    public function mount()
    {
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required',
            'mobile' => 'required|numeric|phone_number|unique:users,mobile',
            'email' => 'email|required|unique:users,email'
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'mobile' => 'required|numeric|phone_number|unique:users,mobile',
            'email' => 'email|required|unique:users,email'
        ]);

        $inputData = [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'password' => Hash::make('password')
        ];

        try {
            $data = User::create($inputData);
            $this->resetForm();
            return $this->emit('success', __('message.user_create_success'));
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
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }

    public function render()
    {
        return view('livewire.admin.user-create-form');
    }
}
