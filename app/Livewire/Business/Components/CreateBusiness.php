<?php

namespace App\Livewire\Business\Components;

use App\Models\Business;
use App\Models\BusinessUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateBusiness extends Component
{


    public $isBusinessOwner = false;
    public $businessName;
    public $businessType;
    public $address;
    public $businessWebsite;
    public $businessPhone;
    public $businessEmail;
    public $businessCreationDate;

    protected $rules = [
        'businessName' => 'required',
        'businessType' => 'required',
        'address' => 'required',
        'businessWebsite' => 'required|url',
        'businessPhone' => 'required',
        'businessEmail' => 'required|email',
        'businessCreationDate' => 'required|date',
    ];

    public function save()
    {
        $validatedData = $this->validate();
        $user = Auth::user();
        // Use Eloquent to create a new record
        $business = Business::create([
            'user_id' => $user->id,
            'name' => $validatedData['businessName'],
            'type' => $validatedData['businessType'],
            'address' => $validatedData['address'],
            'website' => $validatedData['businessWebsite'],
            'phone' => $validatedData['businessPhone'],
            'email' => $validatedData['businessEmail'],
            'creation_date' => $validatedData['businessCreationDate'],
        ]);



        $role = 'administrator';

        $businessUser = BusinessUser::create([
            'business_id' => $business->id,
            'user_id' => $user->id,
            'role' => $role,
        ]);

        // Maybe do something after successful business creation
        session()->flash('message', 'Business successfully created.');
    }
    public function render()
    {
        return view('livewire.business.components.create-business');
    }
}
