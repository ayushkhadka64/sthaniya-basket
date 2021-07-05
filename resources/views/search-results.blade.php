@extends('layouts.app')
@section('content')
<section class="bg-white py-8">



    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

        <div id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                    href="#">
                    Store
                </a>

                <div class="flex items-center" id="store-nav-content">

                    {{-- <div>
                        <form action="{{ route('home.sort') }}" method="POST">
                            @csrf
                            <select name="sortBy" id="sortBy">
                                <button>
                                    <option value="Popularity">Popularity</option>
                                </button>
                                <button>
                                    <option value="High">High to Low price</option>
                                </button>
                                <button>
                                    <option value="Low">Low to High Price</option>
                                </button>
                                <button>
                                    <option value="Latest">Latest</option>
                                </button>
                            </select>
                        </form>
                    </div> --}}
                    <div class="relative">
                        <!-- Dropdown toggle button -->
                        <button
                            class="filter-btn relative z-10 block p-2 bg-white rounded-md dark:bg-gray-800 focus:outline-none">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div
                            class="show-filter absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800 hidden">
                            <a href="{{ URL::current() }}"
                                class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                Default
                            </a>
                            <a href="{{ URL::current() . '?sort=popularity' }}"
                                class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                Popularity
                            </a>
                            <a href="{{ URL::current() . '?sort=high-price' }}"
                                class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                High to Low price
                            </a>
                            <a href="{{ URL::current() . '?sort=low-price' }}"
                                class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                Low to High Price
                            </a>
                            <a href="{{ URL::current() . '?sort=latest' }}"
                                class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white">
                                Latest
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="md:grid grid-cols-2 lg:grid-cols-3 gap-10">


            @foreach ($products as $product)

                <div class="mb-4 lg:flex overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">

                    <!-- Product Image -->
                    <div>
                        <a href="{{ route('product', $product->id) }}">
                            <img src="/images/products/{{ $product->prod_image }}"
                                alt="{{ $product->prod_name }}" class="object-contain h-52 w-full">
                        </a>
                    </div>

                    <!-- Product details -->
                    <div class="p-4 md:p-4">

                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
                            <a href="{{ route('product', $product->id) }}" class="font-bold">
                                {{ $product->prod_name }}
                            </a>
                        </h1>

                        @php
                            preg_match('/^([^.]+)/', $product->prod_descrip, $firstSentence);
                        @endphp
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ $firstSentence[1] }}</p>

                        <!-- Product ratings -->
                        <div class="flex mt-2 item-center">

                            @if ($product->reviews->count())

                                <!-- Add user's ratings out of 5. -->
                                @for($i = 0; $i < round(($product->reviews->sum('review_rating') /
                                    ($product->reviews->count() * 5)) * 5); $i++)

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                            @endfor

                            <!-- Add the remaining ratings without color. -->
                            @if(round(($product->reviews->sum('review_rating') / ($product->reviews->count() * 5)) *
                            5) < 5) @for($i=0; $i <div (5 - round(($product->reviews->sum('review_rating') /
                                ($product->reviews->count() * 5)) * 5)); $i++)
                                <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                </svg>
            @endfor
            @endif

    @else

        <!-- Display empty starts for no ratings -->
        @for ($i = 0; $i < 5; $i++)
            <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 24 24">
                <path
                    d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
            </svg>
        @endfor
        @endif

    </div>


    <div class="mt-3 item-center space-y-2">

        <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">£{{ $product->price }}</h1>

        <h1 class="text-sm font-medium text-gray-700 dark:text-gray-200 md:text-lg">

            @if ($product->prod_quantity > 0)
                In Stock
            @else
                Out Of Stock
            @endif

        </h1>

        @if (auth()->user())

            @if (auth()->user()->user_type === 'customer')

                <!-- Add to wishlist -->

                <form action="{{ route('addToWishlist', $product) }}" method="POST">
                    @csrf
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </form>

                <!-- Add to cart -->

                <form action="{{ route('addToCart', $product->id) }}" method="POST">
                    @csrf
                    <button
                        class="px-2 py-1 text-xs font-bold text-white uppercase 
                                                                                                            transition-colors duration-200 transform bg-gray-800 rounded 
                                                                                                            dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 
                                                                                                            focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add
                        to
                        Cart
                    </button>

                </form>

            @endif

        @endif

        @guest

            <!-- Add to wishlist -->

            <form action="{{ route('addToWishlist', $product) }}" method="POST">
                @csrf
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
            </form>

            <!-- Add to cart -->

            <form action="{{ route('addToCart', $product->id) }}" method="POST">
                @csrf
                <button
                    class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add
                    to Cart
                </button>

            </form>

        @endguest

    </div>
</div>

</div>

@endforeach

</div>
<div class="mt-6 flex justify-center">
<div>
    {{ $products->links() }}
</div>

</div>

</div>

</section>
@endsection
