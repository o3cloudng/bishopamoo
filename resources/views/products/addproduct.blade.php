@extends('layouts.app')

@section('content')


<div class="grid grid-cols-6 gap-2">
    <div class="col-span-2 justify-center w-full mt-0 lg:flex-row sm:mt-10 lg:mt-5 px-10">
        <h3 class="max-w-2xl px-5 font-black text-center pb-5 text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
            Add Book</h3>
            @if(session('status'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('status') }}</span>
                </div>
            @endif
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-4 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
        <form action="{{ route('addproduct') }}" method="post">
            @csrf
            <div class="mb-4">
                {{-- <label for="name">Name</label> --}}
                <input type="text" name="title" id="title" placeholder="Book title"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('title') border-red-400 @enderror" value="{{ old('name') }}">
                @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <textarea name="description" id="description" placeholder="Book description"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="{{ old('description') }}"></textarea>
            </div>
            <div class="mb-4">
                <input type="text" name="price" id="price" placeholder="Price"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('price') border-red-400 @enderror" value="{{ old('username') }}">
                @error('price')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="text" name="discount_price" id="discount_price" placeholder="Discounted price"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('discount_price') border-red-400 @enderror" value="{{ old('username') }}">
                @error('discount_price')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="file" name="book_img" id="book_img" placeholder="Book cover"
                class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="{{ old('book_img') }}">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded 
                font-medium w-full">Add Book</button>
            </div>
        </form>

    </div>
    <div  class="col-span-3 justify-center w-full mt-0 lg:flex-row sm:mt-10 lg:mt-5 px-20">
        @if($books->count())
        <h3 class="max-w-2xl px-5 font-black text-center pb-5 text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
            List of Books</h3>
            @foreach ($books as $book)
                <div class="mb-4 text-gray-700">
                    {{ $book->title }}                
                </div>
            @endforeach
            <p>{{ $books->links() }}</p>
        @else
            <div class="bg-blue-100 border border-blue-400 text-red-700 px-4 py-3 mb-4 rounded relative" role="alert">
                <span class="block sm:inline">No books found.</span>
            </div>              
        @endif
    </div>
    <div class="col-span-1">&nbsp;</div>
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