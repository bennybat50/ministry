@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create User</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('admin.users.partials.fields')
    </form>

</div>
@endsection
