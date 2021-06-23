@extends('layouts.app')
@section('content')
    <section class="body-font flex flex-col w-10/12 shadow-lg rounded-lg">
        <div class="container p-10 mx-auto">

            <!-- Trending products -->
            <div class="">
                <div class="">
                    <!-- Heading -->
                    <h1 class="text-2xl font-light mb-4">Trending Items</h1>
                    <!--Products -->
                    <div class="md:grid grid-cols-2 lg:grid-cols-3">
                        <div
                            class="mb-4 flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="w-1/3 bg-cover"
                                style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
                            </div>

                            <div class="w-2/3 p-4 md:p-4">
                                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Backpack</h1>

                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit In odit</p>

                                <div class="flex mt-2 item-center">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-10" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>

                                </div>

                                <div class="flex justify-between mt-3 item-center">
                                    <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$220</h1>

                                    <button
                                        class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add
                                        to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="mb-4 flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="w-1/3 bg-cover"
                                style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
                            </div>

                            <div class="w-2/3 p-4 md:p-4">
                                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Backpack</h1>

                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit In odit</p>

                                <div class="flex mt-2 item-center">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-10" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>

                                </div>

                                <div class="flex justify-between mt-3 item-center">
                                    <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$220</h1>

                                    <button
                                        class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add
                                        to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="mb-4 flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="w-1/3 bg-cover"
                                style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
                            </div>

                            <div class="w-2/3 p-4 md:p-4">
                                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Backpack</h1>

                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit In odit</p>

                                <div class="flex mt-2 item-center">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-10" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>

                                </div>

                                <div class="flex justify-between mt-3 item-center">
                                    <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$220</h1>

                                    <button
                                        class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add
                                        to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="mb-4 flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="w-1/3 bg-cover"
                                style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
                            </div>

                            <div class="w-2/3 p-4 md:p-4">
                                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Backpack</h1>

                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit In odit</p>

                                <div class="flex mt-2 item-center">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-10" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>

                                </div>

                                <div class="flex justify-between mt-3 item-center">
                                    <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$220</h1>

                                    <button
                                        class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add
                                        to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="mb-4 flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="w-1/3 bg-cover"
                                style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
                            </div>

                            <div class="w-2/3 p-4 md:p-4">
                                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Backpack</h1>

                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit In odit</p>

                                <div class="flex mt-2 item-center">
                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                                    </svg>

                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-10" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>

                                </div>

                                <div class="flex justify-between mt-3 item-center">
                                    <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$220</h1>

                                    <button
                                        class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add
                                        to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
