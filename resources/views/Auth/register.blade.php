@extends('layouts.auth')

@section('content')
<form action="{{ route('register') }}" method="POST">

    @csrf
    @method('POST')

    <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
        <div class="space-y-4">
        <h1 class="text-center text-2xl font-semibold text-gray-600">Register</h1>
        <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Username</label>
            <input type="text" name="name" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
        </div>
        <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Email</label>
            <input type="text" name="email" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
        </div>
        <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Password</label>
            <input type="password" name="password" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
        </div>
        </div>
        <button type="submit" class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Register</button>
        <a href="{{ route('login.form') }}" class="text-sm font-light text-gray-500 dark:text-gray-400">Alredy have an account? <span
        class="font-medium text-blue-600 hover:underline dark:text-blue-500">Sign in here</span>
    </a>
    </div>
    </form>
@endsection