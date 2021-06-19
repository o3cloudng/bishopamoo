@extends('layouts.app')

@section('content')

<!-- BEGIN FEATURES SECTION -->
<div id="features" class="relative w-full px-8 py-0 border-t border-gray-200 md:py-16 lg:py-24 xl:py-20 xl:px-0">
    <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
        <h3 class="max-w-2xl px-5 text-3xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
            Login</h3>
            @if(session('status'))
            <div class="text-white bg-red-500 py-2 px-10 rounded mt-3">
                {{ session('status') }}
            </div>
            @endif
        <div class="w-8/12 justify-center flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-5">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <input type="email" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-400 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" name="password" id="password" placeholder="Choose password"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-400 @enderror" value="">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember"
                    class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded 
                    font-medium w-full">Login</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- END FEATURES SECTION -->

@endsection