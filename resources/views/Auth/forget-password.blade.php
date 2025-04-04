@extends('layouts.auth')

@section('content')
<div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
    <div class="space-y-4">
    <h1 class="text-center text-2xl font-semibold text-gray-600">Forget Password</h1>
    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <form action="{{ route('forget.password') }}" method="POST">
        @csrf
        <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Email</label>
            <input type="text" name="email" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
        </div>
        <button type="submit" class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Kirim Link Reset</button>
    </form>
    </div>
</div>
@endsection
