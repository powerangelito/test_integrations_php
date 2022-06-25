@extends('layout')
@section('page')
    <div>
        <div>
            <button><a href="{{ route('posts', ['id' => $user->id]) }}">Posts</a></button>
            <button><a href="{{ route('tasks', ['id' => $user->id]) }}">Todos</a></button>
        </div>
        <h1>User {{ $user->id }}</h1>
        <label for="name">
            Name:
            <input name="name" type="text" value="{{$user->name}}">
        </label>
        <label for="username">
            Username:
            <input name="username" type="text" value="{{$user->username}}">
        </label>
        <label for="email">
            Email:
            <input name="email" type="text" value="{{$user->email}}">
        </label>
        <div>
            <h2>Address</h2>
            <label for="addressStreet">
                Street:
                <input name="addressStreet" type="text" value="{{$user->address->street}}">
            </label>
            <label for="addressSuite">
                Suite:
                <input name="addressSuite" type="text" value="{{$user->address->suite}}">
            </label>
            <label for="addressCity">
                City:
                <input name="addressCity" type="text" value="{{$user->address->city}}">
            </label>
            <label for="addressZipcode">
                Zipcode:
                <input name="addressZipcode" type="text" value="{{$user->address->zipcode}}">
            </label>
        </div>
        <label for="phone">
            Phone:
            <input name="phone" type="text" value="{{$user->phone}}">
        </label>
        <label for="website">
            Website:
            <input name="website" type="text" value="{{$user->website}}">
        </label>
        <div>
            <h2>Company</h2>
            <label for="companyName">
                Company Name:
                <input name="companyName" type="text" value="{{$user->company->name}}">
            </label>
            <label for="companyCatchPhrase">
                Catch Phrase:
                <input name="companyCatchPhrase" type="text" value="{{$user->company->catchPhrase}}">
            </label>
            <label for="companyBs">
                BS:
                <input name="companyBs" type="text" value="{{$user->company->bs}}">
            </label>
        </div>
    </div>
@endsection
