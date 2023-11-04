@extends('layouts.app')

@section('content')
    <h1>Delete Account</h1>

    <p>Are you sure you want to delete your account? This action is irreversible.</p>

    <form action="{{ route('account.delete') }}" method="post">
        @csrf

        <button type="submit" class="btn btn-danger">Delete Account</button>
    </form>
@endsection
