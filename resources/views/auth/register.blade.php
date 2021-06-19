@extends('layouts.app')

@section('content')


<div class="grid grid-cols-3">
    <div>&nbsp;</div>
    <div class="justify-center w-full mt-0 lg:flex-row sm:mt-10 lg:mt-5">
        <h3 class="max-w-2xl px-5 font-black text-center pb-5 text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
            Register</h3>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                {{-- <label for="name">Name</label> --}}
                <input type="text" name="name" id="name" placeholder="Your name"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('name') border-red-400 @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="text" name="username" id="username" placeholder="Username"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('username') border-red-400 @enderror" value="{{ old('username') }}">
                @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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
                <input type="tel" name="phone" id="phone" placeholder="Phone"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('phone') border-red-400 @enderror" value="{{ old('phone') }}">
                @error('phone')
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
                <input type="password" name="password_confirmation" id="password" placeholder="Repeat password"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="">
            </div>
            <div class="mb-4">
                <input type="file" name="profile_pix" id="profile_pix" placeholder="Profile picture"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="{{ old('profile_pix') }}">
            </div>
            <div class="mb-4">
                <textarea name="address" id="address" placeholder="Shipping address"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="{{ old('address') }}"></textarea>
            </div>
            <div class="mb-4">
                {{-- <h2>Interested in buying?</h2>
                <input type="checkbox" name="buying" id="buying" value="1"
                class="mr-2">
                <label for="buying">Yes</label> --}}
                <input type="checkbox" name="buying" id="buying" value="1"
                class="mr-2">
                <label for="buying">Interested in buying?</label>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded 
                font-medium w-full">Register</button>
            </div>
        </form>

    </div>
    <div>&nbsp;</div>
</div>


<!-- BEGIN FEATURES SECTION -->
<div id="features" class="relative w-full px-8 py-0 border-t border-gray-200 md:py-16 lg:py-24 xl:py-20 xl:px-0">
    <div class="grid grid-cols-3 sm:grid-cols-1 gap-2 px-20">
        <div class="">&nbsp;</div>
        
        <div class="">&nbsp;</div>
    </div>
    <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
        
    </div>
</div>
<!-- END FEATURES SECTION -->

@endsection