@extends('layouts.guest')

@section('content')


    <div>

        @if($isBusinessOwner)
            @if($isBusinessInReview)
                Please wait for your current application to be reviewed
                @else
                You may only have one business per account
            @endif
        @else
            @livewire('business.components.createBusiness')
        @endif

    </div>

@endsection
