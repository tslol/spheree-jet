<div>

    @php
        $users = [
            [
                'id' => 1,
                'name' => 'Administrator'
            ],
            [
                'id' => 2,
                'name' => 'Finanical',
            ],
            [
                'id' => 3,
                'name' => 'User'
            ]
        ];
    @endphp

    <x-mary-button label="Add New Member" onclick="modalTeamInvite.showModal()" />

    <x-mary-modal id="modalTeamInvite" title="Invite a New Member">

        <form wire:submit.prevent="inviteTeam" method="POST">
            @csrf
            <div class="form-group">
                <x-mary-input label="Email Address" placeholder="Members Email Address" hint="If they aren't currently a user, they will recieve an email" wire:model="memberEmail" />

                <div class="mt-3"></div>

                <x-mary-select
                    label="User Level"
                    :options="$users"
                    placeholder="Select an user level"
                    placeholder-value="0" {{-- Set a value for placeholder. Default is `null` --}}
                    wire:model="selectedUser2" />
            </div>



            <x-slot:actions>
                <x-mary-button label="Invite" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </form>


    </x-mary-modal>
</div>
