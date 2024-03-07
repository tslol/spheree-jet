@extends('layouts.business')

@section('content')

<div class="w-full py-10">
    <div class="container px-16">

        <div class="flex flex-row justify-between">

            <div class="flex-1">
                <h1 class="text-4xl font-bold text-gray-800">Your Team</h1>
                <p class="text-lg font-medium pt-3 text-gray-400">Manage your Team here, including inviations and permissions</p>
            </div>

            <div class="flex-2">
                @livewire('business.components.team-invite')
            </div>

        </div>
        <div class="w-full mt-10 pb-6 rounded-lg shadow-md bg-white ">
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($team as $user)
                            <tr>
                                <td>
                                    <img src="{{ URL::asset('/storage/' . $user->profile_photo_path) }}" alt="{{ $user->name }}'s avatar" class="w-10 h-10 rounded-full">
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->pivot->role }}</td>
                                <td>
                                    <x-mary-icon name="s-pencil" class="hover:text-gray-500 transition-all duration-200 w-6 h-6"/>
                                    <x-mary-icon name="s-cog-6-tooth" class="hover:text-gray-500 transition-all duration-200 w-6 h-6" />
                                    <x-mary-icon name="s-trash" class="hover:text-gray-500 transition-all duration-200 w-6 h-6"/>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
