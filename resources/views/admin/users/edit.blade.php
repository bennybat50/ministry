@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit {{ $model->name }}</h1>

    <form action="{{ route('users.update', ['user'=>$model->id]) }}" method="post">
        @method('put')

        @csrf
        @include('admin.users.partials.fields')


    </form>

</div>
@endsection
