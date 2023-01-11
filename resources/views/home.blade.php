@extends('app')

@section('content')

<div id="home-background" class="d-flex justify-content-center align-items-center">
    <div class="col-md-10 px-5" id="header-home">
        <div class="row d-flex justify-content-start">
            <div class="col-md-6 px-1">
                <div class="card mx-0 my-3">
                    <div id="first_card">
                        @include('cards.first')
                    </div>
                    <div id="second_card">
                        @include('cards.second')
                    </div>
                    <div id="third_card">
                        @include('cards.third')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js') }}/home.js" defer></script>
@endpush

@push('css')

@endpush

